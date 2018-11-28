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
            $table->increments('Id_Habitacion');
            $table->integer('Id_Alojam_Priva');
            $table->foreign('Id_Alojam_Priva')
                ->references('Id_Alojam_Priva')
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
