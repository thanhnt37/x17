<?php namespace Tests\Services;

use Tests\TestCase;

class SearchServiceTest extends TestCase
{

    public function testGetInstance()
    {
        /** @var  \App\Services\SearchServiceInterface $service */
        $service = \App::make(\App\Services\SearchServiceInterface::class);
        $this->assertNotNull($service);
    }

}
