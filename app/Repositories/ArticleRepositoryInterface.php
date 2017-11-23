<?php

namespace App\Repositories;

interface ArticleRepositoryInterface extends SingleKeyModelRepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function findBySlug($slug);

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
