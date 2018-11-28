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
            $table->increments('Id_Reserva_Hotel');
            $table->integer('Id_Res_Hot');
            $table->foreign('Id_Res_Hot')
                ->references('Id_Res_Hot')
                ->on('Reserva_Hotel');
            $table->integer('Id_Habita_Hotel');
            $table->foreign('Id_Habita_Hotel')
                ->references('Id_Habita_Hotel')
                ->on('Habitacion_Hotel');
                $table->integer('Id_Alojam_Priva');
            $table->foreign('Id_Alojam_Priva')
                ->references('Id_Alojam_Priva')
                ->on('Alojamiento_Privado');
            $table->date('Fecha_ingreso');
            $table->date('Fecha_egreso');
            $table->float('Precio');
            $table->string('Tipo');
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
