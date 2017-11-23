<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;

class IndexController extends Controller
{
    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /* @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository,
        SeriesRepositoryInterface   $seriesRepository
    ) {
        $this->articleRepository    = $articleRepository;
        $this->seriesRepository     = $seriesRepository;
    }

    public function index()
    {
        $featuredArticles   = $this->articleRepository->getFeaturedArticles(5);
        $viewedArticles     = $this->articleRepository->getViewedArticles(8);
        $featuredSeries     = $this->seriesRepository->getFeaturedSeries(4);

        return view('pages.web.2017.index',
            [
                'featuredArticles' => $featuredArticles,
                'viewedArticles'   => $viewedArticles,
                'featuredSeries'   => $featuredSeries,
            ]
        );
    }
}
