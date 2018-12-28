<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesReservasAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_reservas_autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_res_auto');
            $table->foreign('id_res_auto')
                ->references('id')
                ->on('reservas_autos');
            $table->string('patente');
            $table->foreign('patente')
                ->references('patente')
                ->on('automoviles')
                ->onDelete('cascade');
            $table->datetime('fecha_retiro');
            $table->datetime('fecha_regreso');
            $table->float('precio_reserva');
            $table->float('descuento');
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
        Schema::dropIfExists('detalles_reservas_autos');
    }
}
