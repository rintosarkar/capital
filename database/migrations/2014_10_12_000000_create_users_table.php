<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password', 60);
            // $table->rememberToken();
            // $table->timestamps();

            $table->increments('id');
            $table->string('username')->unique();
            $table->string('full_name');
            $table->string('gender');
            $table->string('email');
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('address');
            $table->string('phone_number');
            $table->string('country');            
            $table->string('account_no');

            $table->integer('sponsor_id')->unsigned();
            $table->integer('upline_id')->unsigned();

            $table->string('user_type');
            $table->string('pin');
            $table->string('is_block')->default('n');
            $table->string('block_issue')->nullable();


            $table->string('last_login_ip')->nullable();
            $table->tinyInteger('is_logged')->nullable();
            $table->tinyInteger('status')->default(0);

            $table->timestamp('signup_date');
            $table->timestamp('last_login_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
