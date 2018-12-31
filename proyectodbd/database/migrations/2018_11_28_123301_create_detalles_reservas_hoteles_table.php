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
            $table->integer('reserva_hotel_id');
            $table->foreign('reserva_hotel_id')
                ->references('id')
                ->on('reservas_hoteles')
                ->onDelete('cascade');
            $table->integer('habitacion_hotel_id');
            $table->foreign('habitacion_hotel_id')
                ->references('id')
                ->on('habitaciones_hoteles')
                ->onDelete('cascade');
            $table->integer('alojamiento_privado_id');
            $table->foreign('alojamiento_privado_id')
                ->references('id')
                ->on('alojamientos_privados')
                ->onDelete('cascade');
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
