<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('problem_details',500);
            $table->integer('user_id')->unsigned();
            $table->timestamp('request_date');
            $table->timestamp('response_date');
            $table->string('status');

            $table-> foreign('user_id')
                  -> references('id')
                  -> on('users')
                  -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supports');
    }
}
