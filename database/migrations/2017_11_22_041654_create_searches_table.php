<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('key');
            $table->string('alias');

            $table->unsignedBigInteger('count')->nullable()->default(0);

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('searches', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('searches');
    }
}
