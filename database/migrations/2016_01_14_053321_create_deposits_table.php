<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('amount');
            $table->string('pmnt_method',6);
            $table->string('pmnt_account',50);
            // $table->string('amnt_rcvd');
            // $table->timestamp('request_date');
            $table->timestamp('rcvd_date');
            // $table->string('schedule_gnrtd');

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
        Schema::drop('deposits');
    }
}
