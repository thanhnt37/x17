<?php namespace App\Repositories\Eloquent;

use \App\Repositories\SearchRepositoryInterface;
use \App\Models\Search;

class SearchRepository extends SingleKeyModelRepository implements SearchRepositoryInterface
{

    public function getBlankModel()
    {
        return new Search();
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
     * @params  $offset
     *          $limit
     *
     * @return mixed
     */
    public function getFeaturedTags($offset = 0, $limit = 10)
    {
        return $this->getBlankModel()->orderBy('count', 'desc')->offset($offset)->limit($limit)->get();
    }
}
