<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigenesDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenes_destinos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_vuelo_id');
            $table->foreign('detalle_vuelo_id')
                ->references('id')
                ->on('detalles_vuelos')
                ->onDelete('cascade');
            $table->integer('aeropuerto_id');
            $table->foreign('aeropuerto_id')
                ->references('id')
                ->on('aeropuertos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('origenes_destinos');
    }
}
