<?php

namespace App\Presenters;

use Illuminate\Support\Facades\Redis;
use App\Models\Article;
use App\Models\Image;

class ArticleImagePresenter extends BasePresenter
{
    protected $multilingualFields = [];

    protected $imageFields = [];

    /**
    * @return \App\Models\Article
    * */
    public function article()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cached = Redis::hget(\CacheHelper::generateCacheKey('hash_articles'), $this->entity->article_id);
            if( $cached ) {
                $article = new Article(json_decode($cached, true));
                $article['id'] = json_decode($cached, true)['id'];
                return $article;
            } else {
                $article = $this->entity->article;
                Redis::hsetnx(\CacheHelper::generateCacheKey('hash_articles'), $this->entity->article_id, $article);
                return $article;
            }
        }

        $image = $this->entity->article;
        return $image;
    }

    /**
    * @return \App\Models\Image
    * */
    public function image()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cached = Redis::hget(\CacheHelper::generateCacheKey('hash_images'), $this->entity->image_id);
            if( $cached ) {
                $image = new Image(json_decode($cached, true));
                $image['id'] = json_decode($cached, true)['id'];
                return $image;
            } else {
                $image = $this->entity->image;
                Redis::hsetnx(\CacheHelper::generateCacheKey('hash_images'), $this->entity->image_id, $image);
                return $image;
            }
        }

        $image = $this->entity->image;
        return $image;
    }

    
}
