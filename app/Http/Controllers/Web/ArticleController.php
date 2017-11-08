<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function category()
    {
        return view('pages.web.2017.articles.category', [
        ]);
    }
    public function show()
    {
        return view('pages.web.2017.articles.detail', [
        ]);
    }
}
