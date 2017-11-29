<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseRequest;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;
use App\Services\SearchServiceInterface;

class SearchController extends Controller
{
    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /* @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    /* @var \App\Services\SearchServiceInterface */
    protected $searchService;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository,
        SeriesRepositoryInterface   $seriesRepository,
        SearchServiceInterface      $searchService
    ) {
        $this->articleRepository    = $articleRepository;
        $this->seriesRepository     = $seriesRepository;
        $this->searchService        = $searchService;
    }

    public function search(BaseRequest $request)
    {
        $keyword = $request->get('keyword', '');
        if( $keyword == '' ) {
            return view('pages.web.2017.search.search', ['keyword' => ''] );
        }

        // find articles by keyword
        $articles = $this->articleRepository->getWithKeyword($keyword);
        $total = $this->articleRepository->countWithKeyword($keyword);

        // counting keyword
        $this->searchService->countingKeyword($keyword);

        return view('pages.web.2017.search.search',
            [
                'keyword'  => $request->get('keyword', ''),
                'articles' => $articles,
                'total'    => $total
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
