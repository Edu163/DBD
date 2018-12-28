<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_compania');
            $table->foreign('id_compania')
                ->references('id')
<<<<<<< HEAD
                ->on('companias');
            $table->float('precio');
            $table->integer('duracion_vuelo');
            $table->datetime('fecha_despegue');
            $table->datetime('fecha_aterrizaje');
=======
                ->on('companias')
                ->onDelete('cascade');
            $table->string('modelo');
>>>>>>> development
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
        Schema::dropIfExists('aviones');
    }
}
