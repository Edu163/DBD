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
            $table->increments('Id_Alojam_Priva');
            $table->integer('Id_Calendario_Aloj');
            $table->foreign('Id_Calendario_Aloj')
                ->references('Id_Calendario_Aloj')
                ->on('Calendario_Alojamiento');
            $table->integer('Capacidad');
            $table->string('Direccion');
            $table->float('Nombre');
            $table->float('Estrella');
            $table->float('Valoracion');
            $table->string('Pais');
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
