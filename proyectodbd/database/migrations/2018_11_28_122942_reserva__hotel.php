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
        Schema::create('Reserva_Hotel', function (Blueprint $table) {
            $table->increments('id_Reserva_Hotel');
            $table->integer('id_Venta');
            $table->foreign('id_Venta')
                ->references('id_Venta')
                ->on('Venta');
            $table->float('precio');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->float('monto_Total');
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
