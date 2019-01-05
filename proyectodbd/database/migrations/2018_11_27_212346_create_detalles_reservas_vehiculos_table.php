<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesReservasVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_reservas_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reserva_vehiculo_id');
            $table->foreign('reserva_vehiculo_id')
                ->references('id')
                ->on('reservas_vehiculos');
            $table->string('patente');
            $table->foreign('patente')
                ->references('patente')
                ->on('vehiculos')
                ->onDelete('cascade');
            $table->datetime('fecha_retiro');
            $table->datetime('fecha_regreso');
            $table->float('precio_reserva');
            $table->float('descuento');
            $table->integer('cantidad');
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
        Schema::dropIfExists('detalles_reservas_vehiculos');
    }
}
