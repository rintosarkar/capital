<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 10, 5);
            $table->decimal('wdrl_chrg', 10, 2);
            $table->tinyInteger('amount_type');
            $table->timestamp('request_date');
            $table->timestamp('response_date');
            $table->integer('user_id')->unsigned();

            $table->string('status');
            $table->string('withdraw_by');
            $table->string('tnx_id');


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('withdrawals');
    }
}
