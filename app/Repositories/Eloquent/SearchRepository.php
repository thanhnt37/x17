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

}
