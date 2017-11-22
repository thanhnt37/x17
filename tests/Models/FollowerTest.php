<?php namespace Tests\Models;

use App\Models\Follower;
use Tests\TestCase;

class FollowerTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Models\Follower $follower */
        $follower = new Follower();
        $this->assertNotNull($follower);
    }

    public function testStoreNew()
    {
        /** @var  \App\Models\Follower $follower */
        $followerModel = new Follower();

        $followerData = factory(Follower::class)->make();
        foreach( $followerData->toFillableArray() as $key => $value ) {
            $followerModel->$key = $value;
        }
        $followerModel->save();

        $this->assertNotNull(Follower::find($followerModel->id));
    }

}
