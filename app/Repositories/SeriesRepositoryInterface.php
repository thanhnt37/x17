<?php namespace App\Repositories;

interface SeriesRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @params  $categoryIds
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getFeaturedSeries($categoryIds = [], $offset = 0, $limit = 10);

}