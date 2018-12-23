<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesVentasVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ventas_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venta');
            $table->foreign('id_venta')
                ->references('id')
                ->on('ventas');
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
        Schema::dropIfExists('detalles_ventas_vuelos');
    }
}
