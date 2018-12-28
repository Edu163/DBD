<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vuelo');
            $table->foreign('id_vuelo')
                ->references('id')
                ->on('vuelos')
                ->onDelete('cascade');
            $table->integer('avion_id');
            $table->foreign('avion_id')
                ->references('id')
                ->on('aviones')
                ->onDelete('cascade');
            $table->integer('aeropuerto_id');
            $table->foreign('aeropuerto_id')
                ->references('id')
                ->on('aeropuertos')
                ->onDelete('cascade');
            $table->integer('id_origen');
            $table->foreign('id_origen')
                ->references('id')
                ->on('aeropuertos')
                ->onDelete('cascade');
            $table->integer('id_destino');
            $table->foreign('id_destino')
                ->references('id')
                ->on('aeropuertos')
                ->onDelete('cascade');
            $table->float('precio');
            $table->datetime('fecha_despegue');
            $table->datetime('fecha_aterrizaje');
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
        Schema::dropIfExists('detalles_vuelos');
    }
}
