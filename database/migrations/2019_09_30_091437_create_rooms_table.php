<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_room');
            $table->bigInteger('id_hotel');
            $table->string('pictureroom');
            $table->string('descripcion');
            $table->string('activity');
            $table->string('service');
            $table->float('price');
            $table->float('price2');
            $table->boolean('available');
            $table->integer('vacancies');           
            $table->integer('quantity');
            $table->integer('person');
            //$table->integer('children');
           // $table->integer('capacity'); 
             $table->float('children');
            $table->float('capacity'); 
            $table->string('include');
            $table->string('info1');
            $table->string('info2');
            $table->string('bed1');
            $table->string('bed2');
            $table->string('serviceespecial1');
            $table->string('serviceespecial2');
            $table->string('infoprice1'); 
            $table->string('infoprice2');
            $table->string('alert1');
            $table->string('alert2');
            $table->string('notice1');
            $table->string('notice2');
             $table->integer('infoConfirm');
            $table->string('inforegister');
            $table->string('infocard');  
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
        Schema::dropIfExists('rooms');
    }
}
