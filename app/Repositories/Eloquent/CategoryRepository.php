<?php namespace App\Repositories\Eloquent;

use \App\Repositories\CategoryRepositoryInterface;
use \App\Models\Category;

class CategoryRepository extends SingleKeyModelRepository implements CategoryRepositoryInterface
{

    public function getBlankModel()
    {
        return new Category();
    }

    public function rules()
    {
        return [
        ];
    }

    public function messages()
    {
        return [
        ];
    }

    /**
     * @param   $categoryId
     *
     * @return  array
     */
    public function getAllChilds($categoryId)
    {
        $ids = [];
        $category = $this->find($categoryId);
        if( !empty($category) ) {
            $this->recursiveAllChilds($category, $ids);
        }

        return $ids;
    }

    private function recursiveAllChilds(Category $category, &$ids = [])
    {
        array_push($ids, $category->id);

        $childs = $category->childs;
        if( !count($childs) ) {
            return $ids;
        }

        foreach( $childs as $child ) {
            $this->recursiveAllChilds($child, $ids);
        }

        return $ids;
    }
}
