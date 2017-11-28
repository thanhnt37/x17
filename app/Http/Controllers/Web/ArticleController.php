<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;

class ArticleController extends Controller
{
    /* @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /* @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    public function __construct(
        CategoryRepositoryInterface     $categoryRepository,
        ArticleRepositoryInterface      $articleRepository,
        SeriesRepositoryInterface       $seriesRepository
    ) {
        $this->categoryRepository       = $categoryRepository;
        $this->articleRepository        = $articleRepository;
        $this->seriesRepository         = $seriesRepository;
    }

    public function category($categorySlug)
    {
        $category = $this->categoryRepository->findBySlug($categorySlug);
        if( empty($category) ) {
            return view('pages.web.2017.404');
        }

        $categoryIds = $this->categoryRepository->getAllChilds($category->id);
        $featuredArticles   = $this->articleRepository->getFeaturedArticles($categoryIds, 0, 3);
        $viewedArticles     = $this->articleRepository->getViewedArticles($categoryIds, 0, 6);
        $seriesArticles     = $this->articleRepository->getSeriesArticles($categoryIds, 0, 5);
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

    public function detail($category, $slug)
    {
        $article = $this->articleRepository->findBySlug($slug);
        if( empty($article) ) {
            return view('pages.web.2017.404');
        }

        if( $article->category->slug != $category ) {
            return redirect()->action('Web\ArticleController@detail', [$article->category->slug, $article->slug]);
        }

        return view(
            'pages.web.2017.articles.detail',
            [
                'article' => $article
            ]
        );
    }
}
