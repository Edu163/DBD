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
            $table->increments('Id_Habita_Hotel');

            $table->integer('Id_Hotel2');
            $table->foreign('Id_Hotel2')
                ->references('Id_Hotel')
                ->on('Hotel');

            $table->integer('Id_Calendario_Aloj');
             $table->foreign('Id_Calendario_Aloj')
                ->references('Id_Calendario_Aloj')
                ->on('Calendario_Alojamiento');
            $table->integer('Capacidad');
            $table->integer('Camas');
            $table->integer('Numero');
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
