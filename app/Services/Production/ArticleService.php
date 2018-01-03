<?php

namespace App\Services\Production;

use App\Services\ArticleServiceInterface;
use App\Repositories\ArticleRepositoryInterface;

class ArticleService extends BaseService implements ArticleServiceInterface
{
    /** @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    public function __construct(
        ArticleRepositoryInterface  $articleRepository
    ) {
        $this->articleRepository    = $articleRepository;
    }

    const IMAGE_ID_SESSION_KEY = 'article-image-id-session-key';

    public function filterContent($content, $locale = null)
    {
        $locale = empty($locale) ? \App::getLocale() : $locale;

        return $content;
    }

    public function resetImageIdSession()
    {
        \Session::put(self::IMAGE_ID_SESSION_KEY, []);
    }

    public function addImageIdToSession($imageId)
    {
        $sessionIds = \Session::get(self::IMAGE_ID_SESSION_KEY, []);
        array_push($sessionIds, intval($imageId));
        \Session::put(self::IMAGE_ID_SESSION_KEY, array_values($sessionIds));
    }

    public function removeImageIdFromSession($imageId)
    {
        $sessionIds = \Session::get(self::IMAGE_ID_SESSION_KEY, []);
        $pos = array_search(intval($imageId), $sessionIds);
        if ($pos !== false) {
            unset($sessionIds[$pos]);
            \Session::put(self::IMAGE_ID_SESSION_KEY, array_values($sessionIds));
        }
    }

    public function getImageIdsFromSession()
    {
        return \Session::get(self::IMAGE_ID_SESSION_KEY, []);
    }

    public function hasImageIdInSession($imageId)
    {
        $sessionIds = \Session::get(self::IMAGE_ID_SESSION_KEY, []);

        return in_array(intval($imageId), $sessionIds);
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
        $key = 'viewed_article_' . $id;
        $cookie = request()->cookie($key);

        $article = $this->articleRepository->find($id);

        if( !empty($cookie) ) {
            return $article->read;
        }

        $this->articleRepository->update(
            $article,
            [
                'read' => ($article->read + 1)
            ]
        );

        \Cookie::queue($key, true, 5);

        return $article->read;
    }
}
