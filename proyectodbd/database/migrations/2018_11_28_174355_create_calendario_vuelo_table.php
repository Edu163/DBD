<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario_vuelo', function (Blueprint $table) {
            $table->increments('id_calendario_vuelo');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')
<<<<<<< HEAD
                ->references('id_usuario')
                ->on('usuario');
=======
                ->references('id_Usuario')
                ->on('Usuario');
>>>>>>> development
            $table->integer('año');
            $table->integer('mes');
            $table->integer('dia');
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
        Schema::dropIfExists('calendario_vuelo');
    }
}
