<?php

namespace App\Repositories;

interface ArticleRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function findBySlug($slug);
    
    /**
     * @params  $categoryIds
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getFeaturedArticles($categoryIds = [], $offset = 0, $limit = 10);

    /**
     * @params  $categoryIds
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getViewedArticles($categoryIds = [], $offset = 0, $limit = 10);

    /**
     * @params  $categoryIds
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getSeriesArticles($categoryIds = [], $offset = 0, $limit = 10);

    /**
     * @params  $seriesId
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getArticleInSeries($seriesId, $offset, $limit);
}
