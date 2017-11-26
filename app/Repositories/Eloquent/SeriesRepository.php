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
    public function getFeaturedSeries($categoryIds = [], $offset = 0, $limit = 10)
    {
        return $this->getBlankModel()->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
    }

}
