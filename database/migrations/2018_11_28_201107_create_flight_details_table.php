<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_details', function (Blueprint $table) {
            /*$table->increments('id');
            $table->integer('vuelo_id');
            $table->foreign('vuelo_id')
                ->references('id')
                ->on('vuelos');
            $table->integer('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('avion_id');
            $table->foreign('avion_id')
                ->references('id')
                ->on('aviones');
            /*$table->integer('id_calendario_vuelo');
            $table->foreign('id_calendario_vuelo')
                ->references('id')
                ->on('calendarios_vuelos');
            $table->datetime('fecha_despegue');
            $table->datetime('fecha_aterrizaje');
            $table->timestamps();*/
            $table->increments('id');
            $table->integer('flight_id');
            $table->foreign('flight_id')
                ->references('id')
                ->on('flights');
            $table->integer('airport_id');
            $table->foreign('airport_id')
                ->references('id')
                ->on('airports')
                ->onDelete('cascade');
            $table->integer('origin_id');
            $table->foreign('origin_id')
                ->references('id')
                ->on('airports')
                ->onDelete('cascade');
            $table->integer('destiny_id');
            $table->foreign('destiny_id')
                ->references('id')
                ->on('airports')
                ->onDelete('cascade');
            $table->integer('precio');
            $table->datetime('fecha_despegue');
            $table->datetime('fecha_aterrizaje');
            $table->integer('asientos_economy');
            $table->integer('asientos_bussiness');
            $table->integer('asientos_premium');
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
        Schema::dropIfExists('flight_details');
    }
}
