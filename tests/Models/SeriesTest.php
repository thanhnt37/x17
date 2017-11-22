<?php namespace Tests\Models;

use App\Models\Series;
use Tests\TestCase;

class SeriesTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\Series $series */
        $series = new Series();
        $this->assertNotNull($series);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\Series $series */
        $seriesModel = new Series();

        $seriesData = factory(Series::class)->make();
        foreach( $seriesData->toFillableArray() as $key => $value ) {
            $seriesModel->$key = $value;
        }
        $seriesModel->save();

        $this->assertNotNull(Series::find($seriesModel->id));
    }

}
