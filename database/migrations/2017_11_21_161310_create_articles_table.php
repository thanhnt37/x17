<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) 
        {
            $table->engine = 'MyISAM';
            
            $table->bigIncrements('id');

            $table->string('slug')->unique();
            $table->string('title');

            $table->text('keywords')->nullable()->default('');
            $table->text('description')->nullable()->default('');

            $table->mediumText('content')->default('');

            $table->bigInteger('series_id')->nullable()->default(0);
            $table->bigInteger('category_id')->nullable()->default(0);

            $table->boolean('is_enabled')->nullable()->default(true);
            $table->timestamp('publish_started_at')->nullable()->default('2000-01-01 00:00:00');
            $table->timestamp('publish_ended_at')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->index('slug');
            $table->index(['is_enabled', 'publish_started_at', 'publish_ended_at', 'id']);

        });

        $this->updateTimestampDefaultValue('articles', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
