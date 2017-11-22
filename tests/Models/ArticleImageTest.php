<?php namespace Tests\Models;

use App\Models\ArticleImage;
use Tests\TestCase;

class ArticleImageTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\ArticleImage $articleImage */
        $articleImage = new ArticleImage();
        $this->assertNotNull($articleImage);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\ArticleImage $articleImage */
        $articleImageModel = new ArticleImage();

        $articleImageData = factory(ArticleImage::class)->make();
        foreach( $articleImageData->toArray() as $key => $value ) {
            $articleImageModel->$key = $value;
        }
        $articleImageModel->save();

        $this->assertNotNull(ArticleImage::find($articleImageModel->id));
    }

}
