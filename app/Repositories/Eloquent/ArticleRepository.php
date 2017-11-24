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


    public function getEnabled($order, $direction, $offset, $limit)
    {
        $query = $this->getBlankModel();

        $now = date('Y-m-d H:i:s');
        $query = $query->where('is_enabled', '=', true)
            ->where('publish_started_at', '<=', $now)
            ->where(function($query) use ($now)
                {
                    $query->whereNull('publish_ended_at')->orWhere('publish_ended_at', '>', $now);
                }
            );

        return $query->orderBy($order, $direction)->offset($offset)->limit($limit)->get();
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
