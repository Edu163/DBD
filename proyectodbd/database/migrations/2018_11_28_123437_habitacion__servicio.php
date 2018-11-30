<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HabitacionServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion_servicio', function (Blueprint $table) {
            
            $table->integer('id_servicio_alojamiento');
            $table->foreign('id_servicio_alojamiento')
                ->references('id_servicio_alojamiento')
                ->on('servicio_alojamiento');
            $table->integer('id_aeropuerto');
             $table->foreign('id_aeropuerto')
                ->references('id_aeropuerto')
                ->on('aeropuerto');
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
