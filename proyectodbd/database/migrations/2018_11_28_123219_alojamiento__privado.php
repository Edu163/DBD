<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlojamientoPrivado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alojamiento_Privado', function (Blueprint $table) {
            $table->increments('id_Alojamiento_Privado');
            $table->integer('id_Calendario_Alojamiento');
            $table->foreign('id_Calendario_Alojamiento')
                ->references('id_Calendario_Alojamiento')
                ->on('Calendario_Alojamiento');
            $table->integer('capacidad');
            $table->string('direccion');
            $table->float('nombre');
            $table->float('estrella');
            $table->float('valoracion');
            $table->string('pais');
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
