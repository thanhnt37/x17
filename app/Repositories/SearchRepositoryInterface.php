<?php namespace App\Repositories;

interface SearchRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @params  $offset
     *          $limit
     *
     * @return mixed
     */
    public function getFeaturedTags($offset = 0, $limit = 10);
}