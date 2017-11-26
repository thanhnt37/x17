<?php

namespace App\Presenters;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Redis;

class ArticlePresenter extends BasePresenter
{
    /**
     * @return \App\Models\Category
     * */
    public function category()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cached = Redis::hget(\CacheHelper::generateCacheKey('hash_categories'), $this->entity->category_id);
            if( $cached ) {
                $category = new Category(json_decode($cached, true));
                $category['id'] = json_decode($cached, true)['id'];
                return $category;
            } else {
                $category = $this->entity->category_id;
                Redis::hsetnx(\CacheHelper::generateCacheKey('hash_categories'), $this->entity->category_id, $category);
                return $category;
            }
        }

        $category = $this->entity->category;
        return $category;
    }
}
