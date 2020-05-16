<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelpicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelpictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_picture'); 
            $table->bigInteger('id_user');   
            $table->bigInteger('id_room');          
            $table->bigInteger('id_hotel');
            $table->date('checkin');
            $table->date('checkout');
            $table->float('price');
            $table->float('total');
            $table->integer('person');
            $table->integer('children');
            //$table->boolean('cancel'); 
            $table->string('cancel'); 
            $table->string('info'); 
            $table->string('picturehotel');                           
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
        Schema::dropIfExists('hotelpictures');
    }
}
