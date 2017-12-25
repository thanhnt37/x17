<?php namespace App\Repositories;

interface CategoryRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param   $categoryId
     *
     * @return  array
     */
    public function getAllChilds($categoryId);

    /**
     * Return all all category without child
     *
     * @params
     *
     * @return  \App\Models\Category
     */
    public function getAllLeaf();
}