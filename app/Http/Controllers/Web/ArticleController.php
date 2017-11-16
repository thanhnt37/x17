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
    public function show()
    {
        return view(
            'pages.web.2017.articles.detail',
            []
        );
    }
}
