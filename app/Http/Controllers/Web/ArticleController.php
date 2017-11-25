<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;

class ArticleController extends Controller
{
    /* @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    public function __construct(
        CategoryRepositoryInterface     $categoryRepository,
        ArticleRepositoryInterface      $articleRepository
    ) {
        $this->categoryRepository       = $categoryRepository;
        $this->articleRepository        = $articleRepository;
    }

    public function category($categorySlug)
    {
        $category = $this->categoryRepository->findBySlug($categorySlug);
        if( empty($category) ) {
            return view('pages.web.2017.404');
        }

        $categoryIds = $this->categoryRepository->getAllChilds($category->id);
        $featuredArticles   = $this->articleRepository->getFeaturedArticles(3, $categoryIds);
        $viewedArticles     = $this->articleRepository->getViewedArticles(6, $categoryIds);
        $seriesArticles     = $this->articleRepository->getSeriesArticles(5, $categoryIds);
        $normalArticles     = $this->articleRepository->getEnabled('publish_started_at', 'desc', 0, 10, $categoryIds);

        $view = ( !empty($category->childs) && count($category->childs) ) ? 'pages.web.2017.articles.category' : 'pages.web.2017.articles.small_category';
        return view(
            $view,
            [
                'featuredArticles' => $featuredArticles,
                'viewedArticles'   => $viewedArticles,
                'seriesArticles'   => $seriesArticles,
                'normalArticles'   => $normalArticles,
            ]
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
