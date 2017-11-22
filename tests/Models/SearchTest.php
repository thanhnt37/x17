<?php namespace Tests\Models;

use App\Models\Search;
use Tests\TestCase;

class SearchTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\Search $search */
        $search = new Search();
        $this->assertNotNull($search);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\Search $search */
        $searchModel = new Search();

        $searchData = factory(Search::class)->make();
        foreach( $searchData->toFillableArray() as $key => $value ) {
            $searchModel->$key = $value;
        }
        $searchModel->save();

        $this->assertNotNull(Search::find($searchModel->id));
    }

}
