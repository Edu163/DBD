<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesReservasHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_reservas_hoteles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_reserva_hotel');
            $table->foreign('id_reserva_hotel')
                ->references('id')
                ->on('reservas_hoteles');
            $table->integer('id_habitacion_hotel');
            $table->foreign('id_habitacion_hotel')
                ->references('id')
                ->on('habitaciones_hoteles');
            $table->integer('id_alojamiento_privado');
            $table->foreign('id_alojamiento_privado')
                ->references('id')
                ->on('alojamientos_privados');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');
            $table->float('precio');
            $table->string('tipo');
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
        Schema::dropIfExists('detalles_reservas_hoteles');
    }
}
