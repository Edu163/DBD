<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleReservaAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reserva_auto', function (Blueprint $table) {
            $table->increments('id_det_res_auto');
            $table->foreign('id_res_auto')
                ->references('id_res_auto')
                ->on('res_auto');
            $table->foreign('patente')
                    ->references('patente')
                    ->on('auto');
            $table->datetime('fecha_retiro');
            $table->datetime('fecha_regreso');
            $table->float('precio_reserva');
            $table->float('descuento');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_reserva_auto');
    }
}
