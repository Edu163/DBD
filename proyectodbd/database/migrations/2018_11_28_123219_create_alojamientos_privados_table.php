<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlojamientosPrivadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamientos_privados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calendario_alojamiento_id');
            $table->foreign('calendario_alojamiento_id')
                ->references('id')
                ->on('calendarios_alojamientos')
                ->onDelete('cascade');
            $table->integer('capacidad');
            $table->string('direccion');
            $table->string('nombre');
            $table->float('estrella');
            $table->float('valoracion');
            $table->string('pais');
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
        Schema::dropIfExists('alojamientos_privados');
    }
}
