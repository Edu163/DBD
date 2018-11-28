<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Hotel', function (Blueprint $table) {
            $table->increments('id_Hotel');
            $table->string('nombre');
            $table->string('pais');
            $table->string('direccion');
            $table->float('estrellas');
            $table->date('valoracion');
            $table->integer('capacidad');
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
