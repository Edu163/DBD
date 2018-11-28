<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Hotel', function (Blueprint $table) {
            $table->increments('Id_Hotel');
            $table->string('Nombre');
            $table->string('Pais');
            $table->string('Direccion');
            $table->float('Estrellas');
            $table->date('Valoracion');
            $table->integer('Capacidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
