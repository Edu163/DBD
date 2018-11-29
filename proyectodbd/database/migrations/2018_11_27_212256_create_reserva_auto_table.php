<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_auto', function (Blueprint $table) {
            $table->increments('id_res_auto');
            $table->integer('id_venta');
            $table->foreign('id_venta')
                  ->references('id_Venta')
                  ->on('Venta');
            $table->datetime('fecha');
            $table->float('monto_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva_auto');
    }
}
