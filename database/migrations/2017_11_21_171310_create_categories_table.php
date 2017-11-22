<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('wildcard')->nullable()->default('');
            $table->string('color')->nullable()->default('');

            $table->bigInteger('parent_id')->nullable()->default(0);
            $table->bigInteger('cover_image_id')->nullable()->default(0);

            $table->integer('order')->nullable()->default(0);

            $table->index('parent_id');

            $table->softDeletes();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('categories', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
