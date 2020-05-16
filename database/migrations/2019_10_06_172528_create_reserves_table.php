<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_reserve'); 
            $table->bigInteger('id_user');   
            $table->bigInteger('id_room');          
            $table->bigInteger('id_hotel');
            $table->datetime('checkin');
            $table->datetime('checkout');
            $table->float('price');
            $table->float('total');
            $table->integer('person');
            $table->integer('children');
            //$table->boolean('cancel');
            $table->string('cancel');  
            $table->string('info');                           
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
        Schema::dropIfExists('reserves');
    }
}
