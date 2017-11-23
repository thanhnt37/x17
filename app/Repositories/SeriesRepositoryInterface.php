<?php namespace App\Repositories;

interface SeriesRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param $numberSeries
     *
     * @return mixed
     */
    public function getFeaturedSeries($numberSeries);

}