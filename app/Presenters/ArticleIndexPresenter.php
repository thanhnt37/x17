<?php

namespace App\Presenters;

use Illuminate\Support\Facades\Redis;
use App\Models\Article;

class ArticleIndexPresenter extends BasePresenter
{
    protected $multilingualFields = [];

    protected $imageFields = [];

    /**
    * @return \App\Models\Article
    * */
    public function article()
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            $cacheKey = \CacheHelper::keyForModel('ArticleModel');
            $cached = Redis::hget($cacheKey, $this->entity->article_id);

            if( $cached ) {
                $article = new Article(json_decode($cached, true));
                $article['id'] = json_decode($cached, true)['id'];
                return $article;
            } else {
                $article = $this->entity->article;
                Redis::hsetnx($cacheKey, $this->entity->article_id, $article);
                return $article;
            }
        }

        $image = $this->entity->article;
        return $image;
    }

    
}
