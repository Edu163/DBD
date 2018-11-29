<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_alojamiento', function (Blueprint $table) {
            $table->increments('id_servicio_alojamiento');
            $table->integer('id_hotel');
            $table->foreign('id_hotel')
                ->references('id_hotel')
                ->on('hotel');
            $table->string('nombre');
            $table->float('precio');
            $table->string('descripcion');
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
