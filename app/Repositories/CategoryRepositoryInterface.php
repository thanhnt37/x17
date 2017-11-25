<?php namespace App\Repositories;

interface CategoryRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param   $categoryId
     *
     * @return  array
     */
    public function getAllChilds($categoryId);
}