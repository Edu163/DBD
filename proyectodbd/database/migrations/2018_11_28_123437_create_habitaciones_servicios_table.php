<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servicio_alojamiento');
            $table->foreign('id_servicio_alojamiento')
                ->references('id')
                ->on('servicios_alojamientos');
            $table->integer('id_habitacion_hotel');
            $table->foreign('id_habitacion_hotel')
                ->references('id')
                ->on('habitaciones_hoteles');
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
        Schema::dropIfExists('habitaciones_servicios');
    }
}
