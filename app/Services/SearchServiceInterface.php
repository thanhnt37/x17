<?php namespace App\Services;

interface SearchServiceInterface extends BaseServiceInterface
{
    /**
     * @params  $keyword
     *
     * @return  integer
     */
    public function countingKeyword($keyword);
}