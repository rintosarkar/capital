<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoirecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roirecords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deposit_id')->unsigned();
            $table->decimal('amount', 10,2);
            $table->timestamp('pmnt_date');
            $table->string('terms');
            // $table->tinyInteger('smnt_generated'); its deleted 21.01.16. 12.09am
            $table->string('status');

            $table-> foreign('deposit_id')
                  -> references('id')
                  -> on('deposits')
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
        Schema::drop('roirecords');
    }
}
