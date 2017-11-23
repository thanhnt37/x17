<?php namespace Tests\Repositories;

use App\Models\Series;
use Tests\TestCase;

class SeriesRepositoryTest extends TestCase
{
    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);
    }

    public function testGetList()
    {
        $series = factory(Series::class, 3)->create();
        $seriesIds = $series->pluck('id')->toArray();

        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);

        $seriesCheck = $repository->get('id', 'asc', 0, 1);
        $this->assertInstanceOf(Series::class, $seriesCheck[0]);

        $seriesCheck = $repository->getByIds($seriesIds);
        $this->assertEquals(3, count($seriesCheck));
    }

    public function testFind()
    {
        $series = factory(Series::class, 3)->create();
        $seriesIds = $series->pluck('id')->toArray();

        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);

        $seriesCheck = $repository->find($seriesIds[0]);
        $this->assertEquals($seriesIds[0], $seriesCheck->id);
    }

    public function testCreate()
    {
        $seriesData = factory(Series::class)->make();

        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);

        $seriesCheck = $repository->create($seriesData->toFillableArray());
        $this->assertNotNull($seriesCheck);
    }

    public function testUpdate()
    {
        $seriesData = factory(Series::class)->create();

        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);

        $seriesCheck = $repository->update($seriesData, $seriesData->toFillableArray());
        $this->assertNotNull($seriesCheck);
    }

    public function testDelete()
    {
        $seriesData = factory(Series::class)->create();

        /** @var  \App\Repositories\SeriesRepositoryInterface $repository */
        $repository = \App::make(\App\Repositories\SeriesRepositoryInterface::class);
        $this->assertNotNull($repository);

        $repository->delete($seriesData);

        $seriesCheck = $repository->find($seriesData->id);
        $this->assertNull($seriesCheck);
    }

}
