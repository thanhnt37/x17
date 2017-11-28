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

            $table->string('slug')->unique();
            $table->string('title');

            $table->text('keywords')->nullable()->default('');
            $table->text('description')->nullable()->default('');

            $table->bigInteger('voted')->nullable()->default(0);
            $table->bigInteger('read')->nullable()->default(0);
            
            $table->bigInteger('category_id')->nullable()->default(0);
            $table->bigInteger('cover_image_id')->nullable()->default(0);

            $table->boolean('is_enabled')->nullable()->default(true);
            $table->timestamp('publish_started_at')->nullable()->default('2000-01-01 00:00:00');
            $table->timestamp('publish_ended_at')->nullable();

            $table->softDeletes();
            $table->timestamps();
            
            $table->index(['is_enabled', 'publish_started_at', 'publish_ended_at', 'id']);
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
