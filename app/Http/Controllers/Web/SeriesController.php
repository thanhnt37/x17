<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;
use App\Repositories\SearchRepositoryInterface;
use App\Services\SeriesServiceInterface;

class SeriesController extends Controller
{
    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /* @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    /* @var \App\Repositories\SearchRepositoryInterface */
    protected $searchRepository;

    /* @var \App\Services\SeriesServiceInterface */
    protected $seriesService;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository,
        SeriesRepositoryInterface   $seriesRepository,
        SearchRepositoryInterface   $searchRepository,
        SeriesServiceInterface      $seriesService
    ) {
        $this->articleRepository    = $articleRepository;
        $this->seriesRepository     = $seriesRepository;
        $this->searchRepository     = $searchRepository;
        $this->seriesService        = $seriesService;
    }

    public function lists()
    {
        $series = $this->seriesRepository->getEnabled('publish_started_at', 'desc', 0, 10);

        return view('pages.web.2017.series.lists',
            [
                'lists' => $series,
            ]
        );
    }

    public function detail($category, $slug)
    {
        $series = $this->seriesRepository->findBySlug($slug);
        if( empty($series) ) {
            $featuredTags = $this->searchRepository->getFeaturedTags();
            return view('pages.web.2017.404', ['featuredTags' => $featuredTags]);
        }

        if( $series->category->slug != $category ) {
            return redirect()->action('Web\SeriesController@detail', [$series->category->slug, $series->slug]);
        }

        $this->seriesService->increaseReads($series->id);

        $articles = $this->articleRepository->getArticleInSeries($series->id, 0, 10);

        return view(
            'pages.web.2017.series.detail',
            [
                'series'   => $series,
                'articles' => $articles,
            ]
        );
    }
}
