<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREAMOS LA TABLA 
        Schema::create('usuarios', function(Blueprint $table){
            $table->id('id');
            $table->string('correo empresa',50);
            $table->string('nombre empresa',50);
            $table->string('direccion empresa',50);
            $table->string('name_user',50);
            $table->string('password',50);
            $table->string('url_logo',255);
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
        Schema::dropIfExists('usuarios');
    }
}
