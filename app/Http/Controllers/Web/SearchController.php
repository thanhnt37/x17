<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseRequest;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;

class SearchController extends Controller
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

    public function search(BaseRequest $request)
    {
        $normalArticles     = $this->articleRepository->getEnabled('publish_started_at', 'desc', 0, 10);
        return view('pages.web.2017.search.search',
            [
                'normalArticles'   => $normalArticles
            ]
        );
    }
    public function tags(BaseRequest $request, $tag)
    {
        $normalArticles = $this->articleRepository->getEnabled('publish_started_at', 'desc', 0, 10);

        return view('pages.web.2017.search.tags',
            [
                'tag'            => $tag,
                'normalArticles' => $normalArticles
            ]
        );
    }
}
