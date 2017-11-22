<?php

namespace App\Presenters;

use Illuminate\Support\Facades\Redis;
use App\Models\User;

class ContactPresenter extends BasePresenter
{
    protected $multilingualFields = [];

    protected $imageFields = [];

    /**
    * @return \App\Models\User
    * */
    public function user()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cached = Redis::hget(\CacheHelper::generateCacheKey('hash_users'), $this->entity->user_id);
            if( $cached ) {
                $user = new User(json_decode($cached, true));
                $user['id'] = json_decode($cached, true)['id'];
                return $user;
            } else {
                $user = $this->entity->user;
                Redis::hsetnx(\CacheHelper::generateCacheKey('hash_users'), $this->entity->user_id, $user);
                return $user;
            }
        }

        $image = $this->entity->user;
        return $image;
    }

    
}
