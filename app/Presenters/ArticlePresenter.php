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

    public function image($width = 0, $height = 0)
    {
        if( ($width * $height) == 0 ) {
            return $this->images;
        }

        $image = $this->images->where('width', $width)->where('height', $height)->first();
        if( !empty($image) && $image->is_local ) {
            $config = config('file.categories.' . $image->file_category_type);
            $image->url = \URLHelper::asset($config['local_path'] . $image->url, $config['local_type']);
        }

        return $image;
    }
}
