<?php namespace Tests\Services;

use Tests\TestCase;

class SeriesServiceTest extends TestCase
{

    public function testGetInstance()
    {
        /** @var  \App\Services\SeriesServiceInterface $service */
        $service = \App::make(\App\Services\SeriesServiceInterface::class);
        $this->assertNotNull($service);
    }

}
