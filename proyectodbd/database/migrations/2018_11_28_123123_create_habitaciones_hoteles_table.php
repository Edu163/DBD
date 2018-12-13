<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones_hoteles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hotel');
            $table->foreign('id_hotel')
                ->references('id')
                ->on('hoteles');
            $table->integer('id_calendario_alojamiento');
            $table->foreign('id_calendario_alojamiento')
                ->references('id')
                ->on('calendarios_alojamientos');
            $table->integer('capacidad');
            $table->integer('camas');
            $table->integer('numero');
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
        Schema::dropIfExists('habitaciones_hoteles');
    }
}
