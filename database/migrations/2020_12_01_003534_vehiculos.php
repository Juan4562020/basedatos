<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('url_logo',255);
            
            $table->bigInteger('id_marca')->unsigned();
            //$table->foreign('id_marca')->references('id')->on('marcas');

            $table->bigInteger('id_modelo')->unsigned();
            //$table->foreign('id_modelo')->references('id')->on('modelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
