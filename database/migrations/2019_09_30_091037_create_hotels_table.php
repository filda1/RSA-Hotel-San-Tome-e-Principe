<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
          
                 $table->bigIncrements('id');
                 $table->string('name_hotel');
                 $table->string('descripcion');
                 $table->string('activity');
                 $table->string('id_activity');
                 $table->string('service');
                 $table->string('id_service');
                 $table->string('picturehotel');
                 $table->string('place');
                 $table->string('category');
                 $table->string('info');
                 $table->string('paid type');       
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
        Schema::dropIfExists('hotels');
    }
}
