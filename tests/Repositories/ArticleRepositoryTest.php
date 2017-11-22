<?php

namespace Tests\Repositories;

use App\Models\Article;
use Tests\TestCase;

class ArticleRepositoryTest extends TestCase
{
    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);
    }

    public function testGetList()
    {
        $articles = factory(Article::class, 3)->create();
        $articleIds = $articles->pluck('id')->toArray();

        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articlesCheck = $repository->get('id', 'asc', 0, 1);
        $this->assertInstanceOf(Article::class, $articlesCheck[0]);

        $articlesCheck = $repository->getByIds($articleIds);
        $this->assertEquals(3, count($articlesCheck));
    }

    public function testFind()
    {
        $articles = factory(Article::class, 3)->create();
        $articleIds = $articles->pluck('id')->toArray();

        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleCheck = $repository->find($articleIds[0]);
        $this->assertEquals($articleIds[0], $articleCheck->id);
    }

    public function testCreate()
    {
        $articleData = factory(Article::class)->make();

        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleCheck = $repository->create($articleData->toArray());
        $this->assertNotNull($articleCheck);
    }

    public function testUpdate()
    {
        $articleData = factory(Article::class)->create();

        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleCheck = $repository->update($articleData, $articleData->toArray());
        $this->assertNotNull($articleCheck);
    }

    public function testDelete()
    {
        $articleData = factory(Article::class)->create();

        /** @var  \App\Repositories\ArticleRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleRepositoryInterface::class);
        $this->assertNotNull($repository);

        $repository->delete($articleData);

        $articleCheck = $repository->find($articleData->id);
        $this->assertNull($articleCheck);
    }
}
