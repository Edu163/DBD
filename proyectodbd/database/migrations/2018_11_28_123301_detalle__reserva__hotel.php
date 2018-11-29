<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleReservaHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reserva_hotel', function (Blueprint $table) {
            $table->increments('id_detalle_reserva_hotel');
            $table->integer('id_reserva_hotel');
            $table->foreign('id_reserva_hotel')
                ->references('id_reserva_hotel')
                ->on('reserva_hotel');
            $table->integer('id_habitacion_hotel');
            $table->foreign('id_habitacion_hotel')
                ->references('id_habitacion_hotel')
                ->on('habitacion_hotel');
                $table->integer('id_alojamiento_privado');
            $table->foreign('id_alojamiento_privado')
                ->references('id_alojamiento_privado')
                ->on('alojamiento_privado');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');
            $table->float('precio');
            $table->string('tipo');
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
