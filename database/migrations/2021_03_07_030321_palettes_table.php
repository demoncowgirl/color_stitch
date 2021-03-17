<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PalettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/

     public function up()
       {
           Schema::create('palettes', function (Blueprint $table) {
               $table->increments('id')->unsigned();
               $table->integer('user_id')->unsigned();
               $table->string('palette_name');
               $table->string('colors_array');
               $table->timestamps();
               $table->foreign('user_id')->references('id')->on('users');
           });
       }

       /**
        * Reverse the migrations.
        *
        * @return voidn w
        */
       public function down()
       {
           Schema::dropIfExists('palettes');
           $palettes->foreign('user_id')
           ->references('id')->on('users')
           ->onDelete('cascade');
       }
}
