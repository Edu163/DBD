<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigenesDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenes_destinos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detalle_vuelo');
            $table->foreign('id_detalle_vuelo')
                ->references('id')
                ->on('detalles_vuelos');
            $table->integer('id_aeropuerto');
            $table->foreign('id_aeropuerto')
                ->references('id')
                ->on('aeropuertos');
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
        Schema::dropIfExists('origenes_destinos');
    }
}
