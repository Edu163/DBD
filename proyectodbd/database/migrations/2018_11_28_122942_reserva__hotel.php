<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservaHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_hotel', function (Blueprint $table) {
            $table->increments('id_reserva_hotel');
            $table->integer('id_venta');
            $table->foreign('id_venta')
                ->references('id_venta')
                ->on('venta');
            $table->float('precio');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->float('monto_total');
            $table->float('descuento');
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
