<?php namespace App\Services\Production;

use \App\Services\SeriesServiceInterface;
use App\Repositories\SeriesRepositoryInterface;

class SeriesService extends BaseService implements SeriesServiceInterface
{
    /** @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    public function __construct(
        SeriesRepositoryInterface   $seriesRepository
    ) {
        $this->seriesRepository     = $seriesRepository;
    }

    /**
     * Increase the number of reads
     *
     * @param   int $id
     *
     * @return  int
     * */
    public function increaseReads($id)
    {
        $key = 'viewed_series_' . $id;
        $cookie = request()->cookie($key);

        $series = $this->seriesRepository->find($id);

        if( !empty($cookie) ) {
            return $series->read;
        }

        $this->seriesRepository->update(
            $series,
            [
                'read' => ($series->read + 1)
            ]
        );

        \Cookie::queue($key, true, 5);

        return $series->read;
    }
}
