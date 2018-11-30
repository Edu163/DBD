<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovil', function (Blueprint $table) {
            $table->string('patente')->unique();
            $table->integer('id_calendario_vehiculo');
            $table->integer('id_proveedor');
            $table->integer('id_zona');
            $table->foreign('id_calendario_vehiculo')
                ->references('id_calendario_vehiculo')
                ->on('calendario_vehiculo');
            $table->foreign('id_proveedor')
                ->references('id_proveedor')
                ->on('proveedor');
            $table->foreign('id_zona')
                ->references('id_zona')
                ->on('zona');
            $table->string('marca');
            $table->string('tipo');
            $table->string('gamma');
            $table->string('transmision');
            $table->string('combustible');
            $table->integer('n_pasajeros');
            $table->integer('equipaje_g');
            $table->integer('equipaje_p');
            $table->integer('n_puertas');
            $table->integer('n_kilometraje');
            $table->float('precio_hora');
            $table->boolean('aire_acondicionado');
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
        Schema::dropIfExists('automovil');
    }
}
