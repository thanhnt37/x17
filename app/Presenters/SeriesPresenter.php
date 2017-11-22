<?php

namespace App\Presenters;

use App\Models\Category;
use Illuminate\Support\Facades\Redis;
use App\Models\Image;

class SeriesPresenter extends BasePresenter
{
    protected $multilingualFields = [];

    protected $imageFields = ['cover_image'];

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

    /**
    * @return \App\Models\Image
    * */
    public function coverImage()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cached = Redis::hget(\CacheHelper::generateCacheKey('hash_images'), $this->entity->cover_image_id);
            if( $cached ) {
                $image = new Image(json_decode($cached, true));
                $image['id'] = json_decode($cached, true)['id'];
                return $image;
            } else {
                $image = $this->entity->coverImage;
                Redis::hsetnx(\CacheHelper::generateCacheKey('hash_images'), $this->entity->cover_image_id, $image);
                return $image;
            }
        }

        $image = $this->entity->coverImage;
        return $image;
    }

    
}
