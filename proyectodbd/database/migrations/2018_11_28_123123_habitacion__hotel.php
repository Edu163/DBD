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
        Schema::create('habitacion_hotel', function (Blueprint $table) {
            $table->increments('id_habitacion_hotel');

            $table->integer('id_hotel');
            $table->foreign('id_hotel')
                ->references('id_hotel')
                ->on('hotel');

            $table->integer('id_calendario_alojamiento');
             $table->foreign('id_calendario_alojamiento')
                ->references('id_calendario_alojamiento')
                ->on('calendario_alojamiento');
            
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
