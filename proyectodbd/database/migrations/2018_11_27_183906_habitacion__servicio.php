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
            
            $table->integer('Id_Servicio');
            $table->foreign('Id_Servicio')
                ->references('Id_Servicio')
                ->on('Servicio_Alojamiento');
            $table->integer('Id_Aeropuerto');
             $table->foreign('Id_Aeropuerto')
                ->references('Id_Aeropuerto')
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
