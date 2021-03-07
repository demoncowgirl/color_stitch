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
               $table->id();
               $table->unsignedInteger('user_id')->references('id')->on('users');
               $table->string('palette_name');
               $table->string('colors_array');
               $table->timestamps();
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
       }
}
