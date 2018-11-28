<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioYVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_y_vehiculo', function (Blueprint $table) {
            $table->foreign('id_servicio')
                ->references('id_servicio')
                ->on('servicio_de_vehiculo');
            $table->foreign('patente')
                ->references('patente')
                ->on('automovil');
            $table->float('precio');
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
        Schema::dropIfExists('servicio_y_vehiculo');
    }
}
