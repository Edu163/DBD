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
            $table->increments('id');
            $table->integer('servicio_alojamiento_id');
            $table->foreign('servicio_alojamiento_id')
                ->references('id')
                ->on('servicios_alojamientos')
                ->onDelete('cascade');
            $table->integer('alojamiento_privado_id');
            $table->foreign('alojamiento_privado_id')
                ->references('id')
                ->on('alojamientos_privados')
                ->onDelete('cascade');
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
