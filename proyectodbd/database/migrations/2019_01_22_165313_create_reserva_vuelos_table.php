<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_venta_vuelo_id');
            $table->foreign('detalle_venta_vuelo_id')
                ->references('id')
                ->on('detalles_ventas_vuelos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reserva_vuelos');
    }
}
