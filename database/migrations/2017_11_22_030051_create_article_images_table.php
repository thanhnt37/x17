<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateArticleImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_images', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->unsignedBigInteger('article_id')->default(0)->index();
            $table->unsignedBigInteger('image_id')->default(0);

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('article_images', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_images');
    }
}
