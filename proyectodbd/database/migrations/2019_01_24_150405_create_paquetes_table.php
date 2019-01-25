<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vuelo_id');
            $table->foreign('vuelo_id')
                    ->references('id')
                    ->on('vuelos');
            $table->integer('hotel_id');
            $table->foreign('hotel_id')
                    ->references('id')
                    ->on('hoteles');
            $table->integer('vehiculo_id');
            $table->foreign('vehiculo_id')
                    ->references('id')
                    ->on('vehiculos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('paquetes');
    }
}
