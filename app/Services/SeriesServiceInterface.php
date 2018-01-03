<?php namespace App\Services;

interface SeriesServiceInterface extends BaseServiceInterface
{
    /**
     * Increase the number of reads
     *
     * @param   int $id
     *
     * @return  int
     * */
    public function increaseReads($id);
}