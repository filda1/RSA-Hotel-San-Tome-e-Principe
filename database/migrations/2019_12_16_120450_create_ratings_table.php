<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('funcionarios');
            $table->integer('comodidades');
            $table->integer('limpeza');
            $table->integer('conforto');
            $table->integer('qualidade');
            $table->integer('localizacao');
            $table->integer('wifi');
            $table->float('total');  
            $table->float('porcentaje');     
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
        Schema::dropIfExists('ratings');
    }
}
