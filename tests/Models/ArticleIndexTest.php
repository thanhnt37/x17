<?php namespace Tests\Models;

use App\Models\ArticleIndex;
use Tests\TestCase;

class ArticleIndexTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\ArticleIndex $articleIndex */
        $articleIndex = new ArticleIndex();
        $this->assertNotNull($articleIndex);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\ArticleIndex $articleIndex */
        $articleIndexModel = new ArticleIndex();

        $articleIndexData = factory(ArticleIndex::class)->make();
        foreach( $articleIndexData->toArray() as $key => $value ) {
            $articleIndexModel->$key = $value;
        }
        $articleIndexModel->save();

        $this->assertNotNull(ArticleIndex::find($articleIndexModel->id));
    }

}
