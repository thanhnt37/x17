<?php namespace Tests\Repositories;

use App\Models\ArticleImage;
use Tests\TestCase;

class ArticleImageRepositoryTest extends TestCase
{
    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);
    }

    public function testGetList()
    {
        $articleImages = factory(ArticleImage::class, 3)->create();
        $articleImageIds = $articleImages->pluck('id')->toArray();

        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleImagesCheck = $repository->get('id', 'asc', 0, 1);
        $this->assertInstanceOf(ArticleImage::class, $articleImagesCheck[0]);

        $articleImagesCheck = $repository->getByIds($articleImageIds);
        $this->assertEquals(3, count($articleImagesCheck));
    }

    public function testFind()
    {
        $articleImages = factory(ArticleImage::class, 3)->create();
        $articleImageIds = $articleImages->pluck('id')->toArray();

        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleImageCheck = $repository->find($articleImageIds[0]);
        $this->assertEquals($articleImageIds[0], $articleImageCheck->id);
    }

    public function testCreate()
    {
        $articleImageData = factory(ArticleImage::class)->make();

        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleImageCheck = $repository->create($articleImageData->toFillableArray());
        $this->assertNotNull($articleImageCheck);
    }

    public function testUpdate()
    {
        $articleImageData = factory(ArticleImage::class)->create();

        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);

        $articleImageCheck = $repository->update($articleImageData, $articleImageData->toFillableArray());
        $this->assertNotNull($articleImageCheck);
    }

    public function testDelete()
    {
        $articleImageData = factory(ArticleImage::class)->create();

        /** @var  \App\Repositories\ArticleImageRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\ArticleImageRepositoryInterface::class);
        $this->assertNotNull($repository);

        $repository->delete($articleImageData);

        $articleImageCheck = $repository->find($articleImageData->id);
        $this->assertNull($articleImageCheck);
    }

}
