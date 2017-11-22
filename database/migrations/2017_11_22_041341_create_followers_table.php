<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('email');
            $table->bigInteger('user_id')->nullable()->default(0);

            $table->boolean('is_subscribe')->nullable()->default(true);

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('followers', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
