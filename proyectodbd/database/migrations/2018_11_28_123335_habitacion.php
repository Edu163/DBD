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
        Schema::create('Habitacion', function (Blueprint $table) {
            $table->increments('id_Habitacion');
            $table->integer('id_Alojamiento_Privado');
            $table->foreign('id_Alojamiento_Privado')
                ->references('id_Alojamiento_Privado')
                ->on('Alojamiento_Privado');
            $table->integer('Piso');
            $table->integer('Numero');
            $table->integer('Camas');
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
