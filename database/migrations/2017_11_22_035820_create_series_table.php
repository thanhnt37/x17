<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('name');
            
            $table->text('description')->nullable()->default('');

            $table->bigInteger('cover_image_id')->nullable()->default(0);

            $table->softDeletes();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('series', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}