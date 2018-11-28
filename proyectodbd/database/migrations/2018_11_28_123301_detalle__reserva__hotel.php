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
        Schema::create('Detalle_Reserva_Hotel', function (Blueprint $table) {
            $table->increments('id_Detalle_Reserva_Hotel');
            $table->integer('id_Reserva_Hotel');
            $table->foreign('id_Reserva_Hotel')
                ->references('id_Reserva_Hotel')
                ->on('Reserva_Hotel');
            $table->integer('id_Habitacion_Hotel');
            $table->foreign('id_Habitacion_Hotel')
                ->references('id_Habitacion_Hotel')
                ->on('Habitacion_Hotel');
                $table->integer('id_Alojamiento_Privado');
            $table->foreign('id_Alojamiento_Privado')
                ->references('id_Alojamiento_Privado')
                ->on('Alojamiento_Privado');
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
