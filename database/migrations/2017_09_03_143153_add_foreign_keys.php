<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function($table){
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
        Schema::table('students', function($table){
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('elders', function($table){
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('cards', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('checkins', function($table){
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('buses', function($table){
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropForeign('role_id');
        });
        Schema::table('roles', function($table){
            $table->dropForeign(['office_id','school_id']);
        });
        Schema::table('students', function($table){
            $table->dropForeign(['school_id','user_id']);
        });
        Schema::table('elders', function($table){
            $table->dropForeign(['office_id','user_id']);
        });
        Schema::table('cards', function($table){
            $table->dropForeign(['user_id']);
        });
        Schema::table('checkins', function($table){
            $table->dropForeign(['card_id','user_id']);
        });
        Schema::table('buses', function($table){
            $table->dropForeign(['owner_id']);
        });
        Schema::table('checkins', function($table){
            $table->dropForeign(['card_id','user_id']);
        });
        Schema::table('offices', function($table){
            $table->dropForeign(['office_id']);
        });
    }
}
