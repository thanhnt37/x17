<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseRequest;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;
use App\Services\SearchServiceInterface;
use App\Repositories\SearchRepositoryInterface;

class SearchController extends Controller
{
    /* @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /* @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    /* @var \App\Services\SearchServiceInterface */
    protected $searchService;

    /* @var \App\Repositories\SearchRepositoryInterface */
    protected $searchRepository;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository,
        SeriesRepositoryInterface   $seriesRepository,
        SearchServiceInterface      $searchService,
        SearchRepositoryInterface   $searchRepository
    ) {
        $this->articleRepository    = $articleRepository;
        $this->seriesRepository     = $seriesRepository;
        $this->searchService        = $searchService;
        $this->searchRepository     = $searchRepository;
    }

    public function search(BaseRequest $request)
    {
        $keyword = $request->get('keyword', '');
        $featuredTags = $this->searchRepository->getFeaturedTags();

        if( $keyword == '' ) {
            return view('pages.web.2017.search.search', ['keyword' => '', 'featuredTags' => $featuredTags,] );
        }

        // find articles by keyword
        $articles = $this->articleRepository->getWithKeyword($keyword);
        $total = $this->articleRepository->countWithKeyword($keyword);

        // counting keyword
        $this->searchService->countingKeyword($keyword);

        return view('pages.web.2017.search.search',
            [
                'keyword'      => $request->get('keyword', ''),
                'featuredTags' => $featuredTags,
                'articles'     => $articles,
                'total'        => $total
            ]
        );
    }

    public function tags(BaseRequest $request, $tag)
    {
        // find articles by keyword
        $articles = $this->articleRepository->getWithKeyword($tag);
        $total = $this->articleRepository->countWithKeyword($tag);

        // counting keyword
        $this->searchService->countingKeyword($tag);

        $featuredTags = $this->searchRepository->getFeaturedTags();

        return view('pages.web.2017.search.tags',
            [
                'tag'          => $tag,
                'featuredTags' => $featuredTags,
                'articles'     => $articles,
                'total'        => $total
            ]
        );
    }
}
