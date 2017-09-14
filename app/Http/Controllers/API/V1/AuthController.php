<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\PsrServerRequest;
use App\Http\Requests\API\V1\RefreshTokenRequest;
use App\Http\Requests\APIRequest;
use App\Services\UserServiceInterface;
use App\Services\APIUserServiceInterface;
use App\Repositories\UserRepositoryInterface;
use League\OAuth2\Server\AuthorizationServer;
use Zend\Diactoros\Response as Psr7Response;

class AuthController extends Controller
{
    /** @var \App\Services\UserServiceInterface */
    protected $userService;

    /** @var \App\Repositories\UserRepositoryInterface */
    protected $userRepository;

    /** @var AuthorizationServer */
    protected $server;

    public function __construct(
        UserServiceInterface     $userService,
        UserRepositoryInterface     $userRepository,
        AuthorizationServer         $server
    )
    {
        $this->userService          = $userService;
        $this->userRepository       = $userRepository;
        $this->server               = $server;
    }

    public function signIn(APIRequest $request)
    {
        $data = $request->all();
        $paramsAllow = [
            'string'  => [
                'email',
                'password',
                'grant_type',
                'client_id',
                'client_secret'
            ]
        ];
        $paramsRequire = [
            'email',
            'password',
            'grant_type',
            'client_id',
            'client_secret'
        ];
        $validate = $request->checkParams($data, $paramsAllow, $paramsRequire);
        if ($validate['code'] != 100) {
            return $this->response($validate['code']);
        }
        $data = $validate['data'];
        $data['username'] = $data['email'];

        $check = $this->userService->checkClient($request);
        if( !$check ) {
            return $this->response(101);
        }

        $user = $this->userService->signIn($data);
        if (empty($user)) {
            dd($user);
            return $this->response(101);
        }

        $serverRequest = PsrServerRequest::createFromRequest($request, $data);

        return $this->server->respondToAccessTokenRequest($serverRequest, new Psr7Response);
    }

    public function signUp(APIRequest $request)
    {
        $data = $request->all();
        $paramsAllow = [
            'string'   => [
                'name',
                'email',
                'password',
                'grant_type',
                'client_id',
                'client_secret',
                'telephone',
                'locale',
                'address'
            ],
            'numeric'  => [
                '>=0' => ['gender'],
                '<=1' => ['gender']
            ],
            'datetime' => [
                'birthday' => 'Y-m-d'
            ]
        ];
        $paramsRequire = [
            'name',
            'email',
            'password',
            'grant_type',
            'client_id',
            'client_secret',
            'gender',
            'telephone',
            'birthday',
        ];
        $validate = $request->checkParams($data, $paramsAllow, $paramsRequire);
        if ($validate['code'] != 100) {
            return $this->response($validate['code']);
        }
        $data = $validate['data'];

        $check = $this->userService->checkClient($request);
        if( !$check ) {
            return $this->response(101);
        }

        $userDeleted = $this->userRepository->findByEmail($data['email'], true);
        if (!empty($userDeleted)) {
            return $this->response(111);
        }

        $user = $this->userService->signUp($data);

        $data['username'] = $data['email'];
        $serverRequest = PsrServerRequest::createFromRequest($request, $data);


        $response = $this->server->respondToAccessTokenRequest($serverRequest, new Psr7Response);
        return $response->withStatus(201);
    }

    public function refreshToken(RefreshTokenRequest $request)
    {
        $this->userService->checkClient($request);
        $serverRequest = PsrServerRequest::createFromRequest($request);

        return $this->server->respondToAccessTokenRequest($serverRequest, new Psr7Response);
    }
}
