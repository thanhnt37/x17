<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateArticleIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_index', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('title');
            $table->string('href');

            $table->bigInteger('parent_id')->nullable()->default(0);
            $table->bigInteger('article_id')->default(0)->index();

            $table->softDeletes();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('article_index', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_index');
    }
}
