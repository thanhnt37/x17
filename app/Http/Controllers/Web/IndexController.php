<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepositoryInterface;

class IndexController extends Controller
{
    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository
    ) {
        $this->articleRepository    = $articleRepository;
    }

    public function index()
    {
        $featuredArticles = $this->articleRepository->getFeaturedArticles(5);
        $viewedArticles = $this->articleRepository->getViewedArticles(8);

        return view('pages.web.2017.index',
            [
                'featuredArticles' => $featuredArticles,
                'viewedArticles'   => $viewedArticles
            ]
        );
    }
}
