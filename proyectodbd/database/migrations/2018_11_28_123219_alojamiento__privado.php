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
        Schema::create('alojamiento_privado', function (Blueprint $table) {
            $table->increments('id_alojamiento_privado');
            $table->integer('id_calendario_alojamiento');
            $table->foreign('id_calendario_alojamiento')
                ->references('id_calendario_alojamiento')
                ->on('calendario_alojamiento');
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
