<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tnx_type');
            $table->decimal('amount',10,5);
            $table->string('sign');
            $table->string('purpose');
            $table->timestamp('date');
            $table->integer('user_id')->unsigned();
            $table->integer('related_id')->unsigned();

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
        Schema::drop('transactions');
    }
}
