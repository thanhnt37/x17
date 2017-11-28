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
     * @params  $categoryIds
     *          $offset
     *          $limit
     *
     * @return mixed
     */
    public function getFeaturedSeries($categoryIds = [], $offset = 0, $limit = 10)
    {
        $query = $this->isPublish($this->getBlankModel());

        if( count($categoryIds) >= 1 ) {
            return $query->whereIn('category_id', $categoryIds)->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
        }

        return $query->orderBy('voted', 'desc')->orderBy('read', 'desc')->offset($offset)->limit($limit)->get();
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
