<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlojamientosServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamientos_servicios', function (Blueprint $table) {
            $table->integer('id_servicio_alojamiento');
            $table->foreign('id_servicio_alojamiento')
                ->references('id')
                ->on('servicios_alojamientos');
            $table->integer('id_alojamiento_privado');
            $table->foreign('id_alojamiento_privado')
                ->references('id')
                ->on('alojamientos_privados');
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
        Schema::dropIfExists('alojamientos_servicios');
    }
}
