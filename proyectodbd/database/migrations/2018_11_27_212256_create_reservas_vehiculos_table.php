<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('venta_id');
            $table->foreign('venta_id')
                  ->references('id')
                  ->on('ventas')
                  ->onDelete('cascade');
            $table->datetime('fecha');
            $table->float('monto_total');
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
        Schema::dropIfExists('reservas_vehiculos');
    }
}
