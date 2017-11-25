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


    public function getEnabled($order, $direction, $offset, $limit, $categoryIds = [])
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->offset($offset)->limit($limit)->get();
        }

        return $query->orderBy($order, $direction)->offset($offset)->limit($limit)->get();
    }

    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getFeaturedArticles($numberArticle, $categoryIds = [])
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->orderBy('voted', 'desc')->orderBy('read', 'desc')->skip(0)->take($numberArticle)->get();
        }

        return $query->orderBy('voted', 'desc')->orderBy('read', 'desc')->skip(0)->take($numberArticle)->get();
    }

    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getViewedArticles($numberArticle, $categoryIds = [])
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->orderBy('read', 'desc')->orderBy('voted', 'desc')->skip(0)->take($numberArticle)->get();
        }

        return $query->orderBy('read', 'desc')->orderBy('voted', 'desc')->skip(0)->take($numberArticle)->get();
    }

    private function isPublish($query)
    {
        $now = date('Y-m-d H:i:s');
        return $query->where('is_enabled', '=', true)
            ->where('publish_started_at', '<=', $now)
            ->where(function($query) use ($now)
                {
                    $query->whereNull('publish_ended_at')->orWhere('publish_ended_at', '>', $now);
                }
            );
    }
}
