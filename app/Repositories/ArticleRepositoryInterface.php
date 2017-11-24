<?php

namespace App\Repositories;

interface ArticleRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param $numberArticle
     *
     * @return mixed
     */
    public function getFeaturedArticles($numberArticle);

    /**
     * @param $numberArticle
     *
     * @return mixed
     */
    public function getViewedArticles($numberArticle);
}
