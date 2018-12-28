<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosAlojamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_alojamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hotel');
            $table->foreign('id_hotel')
                ->references('id')
                ->on('hoteles')
                ->onDelete('cascade');
            $table->string('nombre');
            $table->float('precio');
            $table->string('descripcion');
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
        Schema::dropIfExists('servicios_alojamientos');
    }
}
