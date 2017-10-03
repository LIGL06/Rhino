<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->integer('role_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('name', 155);
            $table->string('age',2)->nullable();
            $table->string('address', 155);
            $table->string('phone', 20)->nullable();
            $table->date('birthday')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
