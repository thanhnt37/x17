<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function category($category)
    {
        $bigCategory = ['php', 'javascript', 'databases'];
        if( in_array(strtolower($category), $bigCategory) ) {
            $view = 'pages.web.2017.articles.category';
        } else {
            $view = 'pages.web.2017.articles.small_category';
        }

        return view(
            $view,
            []
        );
    }

    public function series($category)
    {
        return view(
            'pages.web.2017.articles.series',
            []
        );
    }

    public function detail($category, $slug)
    {
        return view(
            'pages.web.2017.articles.detail',
            []
        );
    }
}
