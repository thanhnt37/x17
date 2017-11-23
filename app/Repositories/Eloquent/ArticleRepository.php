<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ArticleRepositoryInterface;
use App\Models\Article;

class ArticleRepository extends SingleKeyModelRepository implements ArticleRepositoryInterface
{
    public function getBlankModel()
    {
        return new Article();
    }

    public function rules()
    {
        return [
        ];
    }

    public function messages()
    {
        return [
        ];
    }

    public function findBySlug($slug)
    {
        return Article::whereSlug($slug)->first();
    }

    /**
     * @param $numberArticle
     *
     * @return mixed
     */
    public function getFeaturedArticles($numberArticle)
    {
        return $this->getBlankModel()->orderBy('voted', 'desc')->orderBy('read', 'desc')->skip(0)->take($numberArticle)->get();
    }
    
    /**
     * @param $numberArticle
     *
     * @return mixed
     */
    public function getViewedArticles($numberArticle)
    {
        return $this->getBlankModel()->orderBy('read', 'desc')->orderBy('voted', 'desc')->skip(0)->take($numberArticle)->get();
    }
}
