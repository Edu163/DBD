<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->increments('id_vuelo');
            $table->integer('id_detalle_venta_vuelo');
            $table->foreign('id_detalle_venta_vuelo')
                ->references('id_detalle_venta_vuelo')
                ->on('detalle_venta_vuelo');
            $table->float('precio');
            $table->integer('duracion');
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
        Schema::dropIfExists('vuelo');
    }
}
