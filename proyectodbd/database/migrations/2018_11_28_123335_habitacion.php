<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Habitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->increments('id_habitacion');
            $table->integer('id_alojamiento_privado');
            $table->foreign('id_alojamiento_privado')
                ->references('id_alojamiento_privado')
                ->on('alojamiento_privado');
            $table->integer('piso');
            $table->integer('numero');
            $table->integer('camas');
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
