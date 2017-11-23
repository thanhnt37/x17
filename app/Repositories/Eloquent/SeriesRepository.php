<?php namespace App\Repositories\Eloquent;

use \App\Repositories\SeriesRepositoryInterface;
use \App\Models\Series;

class SeriesRepository extends SingleKeyModelRepository implements SeriesRepositoryInterface
{

    public function getBlankModel()
    {
        return new Series();
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

    /**
     * @param $numberSeries
     *
     * @return mixed
     */
    public function getFeaturedSeries($numberSeries)
    {
        return $this->getBlankModel()->orderBy('voted', 'desc')->orderBy('read', 'desc')->skip(0)->take($numberSeries)->get();
    }

}
