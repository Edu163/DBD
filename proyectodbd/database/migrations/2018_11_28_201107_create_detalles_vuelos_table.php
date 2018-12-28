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
<<<<<<< HEAD
                ->on('vuelos');
            $table->integer('id_users');
=======
                ->on('vuelos')
                ->onDelete('cascade');
            /*$table->integer('id_users');
>>>>>>> development
            $table->foreign('id_users')
                ->references('id')
                ->on('users');
            $table->integer('id_avion');
            $table->foreign('id_avion')
                ->references('id')
<<<<<<< HEAD
                ->on('aviones');
            $table->integer('id_calendario_vuelo');
=======
                ->on('aviones')
                ->onDelete('cascade');
            /*$table->integer('id_calendario_vuelo');
>>>>>>> development
            $table->foreign('id_calendario_vuelo')
                ->references('id')
                ->on('calendarios_vuelos');
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
