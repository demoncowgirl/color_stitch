<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('colors', function (Blueprint $table) {
             $table->increments('id')->unsigned();
             $table->integer('user_id')->unsigned();
             $table->string('hex');
             $table->string('dmc');
             $table->string('name');
             $table->timestamps();
             $table->foreign('user_id')->references('id')->on('users');
         });
     }

     public function down()
     {
         Schema::dropIfExists('colors');
         $colors->foreign('user_id')
         ->references('id')->on('users')
         ->onDelete('cascade');
     }
}
