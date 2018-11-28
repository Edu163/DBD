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
        Schema::create('Habitacion_Servicio', function (Blueprint $table) {
            
            $table->integer('id_Servicio_Alojamiento');
            $table->foreign('id_Servicio_Alojamiento')
                ->references('id_Servicio_Alojamiento')
                ->on('Servicio_Alojamiento');
            $table->integer('id_Aeropuerto');
             $table->foreign('id_Aeropuerto')
                ->references('id_Aeropuerto')
                ->on('Aeropuerto');
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
