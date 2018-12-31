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
            $table->integer('servicio_alojamiento_id');
            $table->foreign('servicio_alojamiento_id')
                ->references('id')
                ->on('servicios_alojamientos')
                ->onDelete('cascade');
            $table->integer('habitacion_hotel_id');
            $table->foreign('habitacion_hotel_id')
                ->references('id')
                ->on('habitaciones_hoteles')
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
        Schema::dropIfExists('habitaciones_servicios');
    }
}
