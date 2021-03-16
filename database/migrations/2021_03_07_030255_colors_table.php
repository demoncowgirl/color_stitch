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
             $table->increments('id')->bigInteger();
             $table->string('hex');
             $table->string('dmc');
             $table->string('name');
             $table->bigInteger('user_id')->unsigned()->references('id')->on('users');
             $table->timestamps();
         });
     }

     public function down()
     {
         Schema::dropIfExists('colors');
     }
}
