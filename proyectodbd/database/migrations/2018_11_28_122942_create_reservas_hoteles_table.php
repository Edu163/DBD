<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_hoteles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venta');
            $table->foreign('id_venta')
                ->references('id')
                ->on('ventas')
                ->onDelete('cascade');
            $table->float('precio');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->float('monto_total');
            $table->float('descuento');
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
        Schema::dropIfExists('reservas_hoteles');
    }
}
