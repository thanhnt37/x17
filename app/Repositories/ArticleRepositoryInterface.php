<?php

namespace App\Repositories;

interface ArticleRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getFeaturedArticles($numberArticle, $categoryIds = []);

    /**
     * @params  $numberArticle
     *          $categoryIds
     *
     * @return mixed
     */
    public function getViewedArticles($numberArticle, $categoryIds = []);
}
