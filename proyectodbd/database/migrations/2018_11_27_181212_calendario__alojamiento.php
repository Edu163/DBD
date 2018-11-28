<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CalendarioAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calendario_Alojamiento', function (Blueprint $table) {
            $table->increments('Id_Calendario_Aloj');
            $table->integer('Año');
            $table->integer('Mes');
            $table->integer('Dia');
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
