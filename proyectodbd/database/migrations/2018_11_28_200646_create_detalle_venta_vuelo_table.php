<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentaVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta_vuelo', function (Blueprint $table) {
            $table->increments('id_detalle_venta_vuelo');
            $table->integer('id_venta');
            $table->foreign('id_venta')
                ->references('id_Venta')
                ->on('Venta');
            $table->float('precio');
            $table->float('descuento');
            $table->float('monto_total');
            $table->datetime('fecha');
            $table->string('tipo');
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
        Schema::dropIfExists('detalle_venta_vuelo');
    }
}
