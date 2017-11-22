<?php

namespace App\Http\Middleware\Web;

use App\Services\UserServiceInterface;
use App\Repositories\CategoryRepositoryInterface;

class SetDefaultValues
{
    /** @var \App\Services\UserServiceInterface */
    protected $userService;

    /** @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /**
     * Create a new filter instance.
     *
     * @params  UserServiceInterface        $userService
     *          CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        UserServiceInterface        $userService,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->userService          = $userService;
        $this->categoryRepository   = $categoryRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $user = $this->userService->getUser();
        \View::share('authUser', $user);
        $categories = $this->categoryRepository->getByParentId(0);
        \View::share('categories', $categories);

        return $next($request);
    }
}
