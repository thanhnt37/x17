<?php namespace Tests\Repositories;

use App\Models\Search;
use Tests\TestCase;

class SearchRepositoryTest extends TestCase
{
    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);
    }

    public function testGetList()
    {
        $searches = factory(Search::class, 3)->create();
        $searchIds = $searches->pluck('id')->toArray();

        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);

        $searchesCheck = $repository->get('id', 'asc', 0, 1);
        $this->assertInstanceOf(Search::class, $searchesCheck[0]);

        $searchesCheck = $repository->getByIds($searchIds);
        $this->assertEquals(3, count($searchesCheck));
    }

    public function testFind()
    {
        $searches = factory(Search::class, 3)->create();
        $searchIds = $searches->pluck('id')->toArray();

        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);

        $searchCheck = $repository->find($searchIds[0]);
        $this->assertEquals($searchIds[0], $searchCheck->id);
    }

    public function testCreate()
    {
        $searchData = factory(Search::class)->make();

        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);

        $searchCheck = $repository->create($searchData->toFillableArray());
        $this->assertNotNull($searchCheck);
    }

    public function testUpdate()
    {
        $searchData = factory(Search::class)->create();

        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);

        $searchCheck = $repository->update($searchData, $searchData->toFillableArray());
        $this->assertNotNull($searchCheck);
    }

    public function testDelete()
    {
        $searchData = factory(Search::class)->create();

        /** @var  \App\Repositories\SearchRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SearchRepositoryInterface::class);
        $this->assertNotNull($repository);

        $repository->delete($searchData);

        $searchCheck = $repository->find($searchData->id);
        $this->assertNull($searchCheck);
    }

}
