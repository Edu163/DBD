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
            $table->integer('hotel_id');
            $table->foreign('hotel_id')
                ->references('id')
                ->on('hoteles')
                ->onDelete('cascade');
            $table->integer('calendario_alojamiento_id');
            $table->foreign('calendario_alojamiento_id')
                ->references('id')
                ->on('calendarios_alojamientos')
                ->onDelete('cascade');
            $table->integer('capacidad');
            $table->integer('camas');
            $table->integer('numero');
            $table->integer('precio');
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
