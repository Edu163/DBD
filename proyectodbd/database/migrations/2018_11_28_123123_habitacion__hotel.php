<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HabitacionHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Habitacion_Hotel', function (Blueprint $table) {
            $table->increments('id_Habitacion_Hotel');

            $table->integer('id_Hotel');
            $table->foreign('id_Hotel')
                ->references('id_Hotel')
                ->on('Hotel');

            $table->integer('id_Calendario_Alojamiento');
             $table->foreign('id_Calendario_Alojamiento')
                ->references('id_Calendario_Alojamiento')
                ->on('Calendario_Alojamiento');
            
            $table->integer('capacidad');
            $table->integer('camas');
            $table->integer('numero');
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
