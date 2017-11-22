<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('url');
            $table->string('type');
            $table->string('size');

            $table->softDeletes();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('advertisements', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
