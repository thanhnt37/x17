<?php namespace App\Repositories\Eloquent;

use \App\Repositories\ArticleImageRepositoryInterface;
use \App\Models\ArticleImage;

class ArticleImageRepository extends SingleKeyModelRepository implements ArticleImageRepositoryInterface
{

    public function getBlankModel()
    {
        return new ArticleImage();
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
