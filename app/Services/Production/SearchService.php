<?php namespace App\Services\Production;

use \App\Services\SearchServiceInterface;
use App\Repositories\SearchRepositoryInterface;

class SearchService extends BaseService implements SearchServiceInterface
{
    /* @var \App\Repositories\SearchRepositoryInterface */
    protected $searchRepository;

    public function __construct(
        SearchRepositoryInterface   $searchRepository
    ) {
        $this->searchRepository     = $searchRepository;
    }

    /**
     * @params  $keyword
     *
     * @return  integer
     */
    public function countingKeyword($keyword)
    {
        $slug = str_slug($keyword);
        $key = $this->searchRepository->findBySlug($slug);

        if( empty($key) ) {
            $this->searchRepository->create(
                [
                    'keyword' => $keyword,
                    'slug'    => $slug,
                    'count'   => 1
                ]
            );

            return 1;
        } else {
            $key->count += 1;
            $key->save();
            
            return $key->count;
        }
    }
}
