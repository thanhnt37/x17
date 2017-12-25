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
        $query = $this->isPublish($this->getBlankModel());
        
        return $query->where('slug', '=', $slug)->first();
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
    public function getFeaturedArticles($categoryIds = [], $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
        }

        return $query->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
    }

    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getViewedArticles($categoryIds = [], $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->orderBy('read', 'desc')->orderBy('voted', 'desc')->offset($offset)->limit($limit)->get();
        }

        return $query->orderBy('read', 'desc')->orderBy('voted', 'desc')->offset($offset)->limit($limit)->get();
    }


    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getSeriesArticles($categoryIds = [], $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->where('series_id', '<>', 0)->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
        }

        return $query->where('series_id', '<>', 0)->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
    }

    /**
     * @params  $seriesId
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getArticleInSeries($seriesId, $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        return $query->where('series_id', '=', $seriesId)->orderBy('publish_started_at', 'desc')->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
    }

    /**
     * @params  $keyword
     *          $order
     *          $direction
     *          $offset
     *          $limit
     *
     * @return  array
     */
    public function getWithKeyword($keyword, $order = 'voted', $direction = 'desc', $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        $query = $query->where(function ($subquery) use ($keyword)
        {
            $likeQuery = '%' . $keyword . '%';
            $subquery->where('slug', 'like', $likeQuery)
                ->orWhere('title', 'like', $likeQuery)
                ->orWhere('keywords', 'like', $likeQuery)
                ->orWhere('description', 'like', $likeQuery)
                ->orWhere('content', 'like', $likeQuery);
        });

        return $query->orderBy($order, $direction)->offset($offset)->limit($limit)->get();
    }
    /**
     * @params  $keyword
     *
     * @return  integer
     */
    public function countWithKeyword($keyword)
    {
        $query = $this->isPublish($this->getBlankModel());

        $query = $query->where(function ($subquery) use ($keyword)
        {
            $likeQuery = '%' . $keyword . '%';
            $subquery->where('slug', 'like', $likeQuery)
                ->orWhere('title', 'like', $likeQuery)
                ->orWhere('keywords', 'like', $likeQuery)
                ->orWhere('description', 'like', $likeQuery)
                ->orWhere('content', 'like', $likeQuery);
        });

        return $query->count();
    }


    /**
     * @params  $id
     *
     * @return  \App\Models\Article
     */
    public function getRelateArticles($id)
    {
        $query = $this->isPublish($this->getBlankModel());
        
        return $query->where('id', '<', $id)->orderBy('id', 'desc')->offset(0)->limit(4)->get();
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
