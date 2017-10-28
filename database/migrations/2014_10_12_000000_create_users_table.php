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
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('age',2)->nullable();
            $table->string('address', 155);
            $table->string('phone', 20)->nullable();
            $table->string('city', 5)->nullable();
            $table->string('colonia', 20)->nullable();
            $table->string('postal', 5)->nullable();
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
