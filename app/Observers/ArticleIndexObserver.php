<?php namespace App\Observers;

use Illuminate\Support\Facades\Redis;

class ArticleIndexObserver extends BaseObserver
{
    protected $cachePrefix = 'article_index';

    public function created($model)
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            Redis::hsetnx(\CacheHelper::generateCacheKey('hash_' . $this->cachePrefix), $model->id, $model);
        }
    }

    public function updated($model)
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            Redis::hset(\CacheHelper::generateCacheKey('hash_' . $this->cachePrefix), $model->id, $model);
        }
    }

    public function deleted($model)
    {
        if( \CacheHelper::cacheRedisEnabled() ) {
            Redis::hdel(\CacheHelper::generateCacheKey('hash_' . $this->cachePrefix), $model->id);
        }
    }
}