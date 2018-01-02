<?php  namespace Tests\Controllers\Admin;

use Tests\TestCase;

class SeriesControllerTest extends TestCase
{

    protected $useDatabase = true;

    public function testGetInstance()
    {
        /** @var  \App\Http\Controllers\Admin\SeriesController $controller */
        $controller = \App::make(\App\Http\Controllers\Admin\SeriesController::class);
        $this->assertNotNull($controller);
    }

    public function setUp()
    {
        parent::setUp();
        $authUser = \App\Models\AdminUser::first();
        $this->be($authUser, 'admins');
    }

    public function testGetList()
    {
        $response = $this->action('GET', 'Admin\SeriesController@index');
        $this->assertResponseOk();
    }

    public function testCreateModel()
    {
        $this->action('GET', 'Admin\SeriesController@create');
        $this->assertResponseOk();
    }

    public function testStoreModel()
    {
        $series = factory(\App\Models\Series::class)->make();
        $this->action('POST', 'Admin\SeriesController@store', [
                '_token' => csrf_token(),
            ] + $series->toArray());
        $this->assertResponseStatus(302);
    }

    public function testEditModel()
    {
        $series = factory(\App\Models\Series::class)->create();
        $this->action('GET', 'Admin\SeriesController@show', [$series->id]);
        $this->assertResponseOk();
    }

    public function testUpdateModel()
    {
        $faker = \Faker\Factory::create();

        $series = factory(\App\Models\Series::class)->create();

        $name = $faker->name;
        $id = $series->id;

        $series->title = $name;

        $this->action('PUT', 'Admin\SeriesController@update', [$id], [
                '_token' => csrf_token(),
            ] + $series->toArray());
        $this->assertResponseStatus(302);

        $newSeries = \App\Models\Series::find($id);
        $this->assertEquals($name, $newSeries->title);
    }

    public function testDeleteModel()
    {
        $series = factory(\App\Models\Series::class)->create();

        $id = $series->id;

        $this->action('DELETE', 'Admin\SeriesController@destroy', [$id], [
                '_token' => csrf_token(),
            ]);
        $this->assertResponseStatus(302);

        $checkSeries = \App\Models\Series::find($id);
        $this->assertNull($checkSeries);
    }

}
