<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_vuelo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vuelo');
<<<<<<< HEAD
            $table->integer('id_usuario');
=======
            $table->integer('id_Usuario');
>>>>>>> development
            $table->integer('id_avion');
            $table->integer('id_calendario_vuelo');
            $table->foreign('id_vuelo')
                ->references('id_vuelo')
                ->on('vuelo');
<<<<<<< HEAD
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuario');
=======
            $table->foreign('id_Usuario')
                ->references('id_Usuario')
                ->on('Usuario');
>>>>>>> development
            $table->foreign('id_avion')
                ->references('id_avion')
                ->on('avion');
            $table->foreign('id_calendario_vuelo')
                ->references('id_calendario_vuelo')
                ->on('calendario_vuelo');
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
        Schema::dropIfExists('detalle_vuelo');
    }
}
