<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table)
        {
            $table->engine = 'MyISAM';

            $table->bigIncrements('id');

            $table->string('name')->nullable()->default('');
            $table->string('email')->nullable()->default('');
            $table->string('telephone')->nullable()->default('');
            $table->text('content')->default('');

            $table->bigInteger('user_id')->nullable()->default(0);

            $table->softDeletes();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('contacts', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
