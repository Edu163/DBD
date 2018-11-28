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
            $table->increments('Id_Res_Hot');
            $table->integer('Id_Venta');
            $table->foreign('Id_Venta')
                ->references('Id_Venta')
                ->on('Venta');
            $table->float('Precio');
            $table->date('Fecha');
            $table->integer('Cantidad');
            $table->float('Monto_Total');
            $table->float('Descuento');
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
