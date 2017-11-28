<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;

class SeriesController extends Controller
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
        // $slug   = 'series-' . $slug;
        $series = $this->seriesRepository->findBySlug($slug);
        if( empty($series) ) {
            return view('pages.web.2017.404');
        }

        if( $series->category->slug != $category ) {
            return redirect()->action('Web\SeriesController@detail', [$series->category->slug, $series->slug]);
        }

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
