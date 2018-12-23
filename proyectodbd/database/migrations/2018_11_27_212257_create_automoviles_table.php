<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patente')->unique();
            $table->integer('id_calendario_vehiculo');
            $table->foreign('id_calendario_vehiculo')
                ->references('id')
                ->on('calendarios_vehiculos');
            $table->integer('id_proveedor');
            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedores');
            $table->integer('id_zona');
            $table->foreign('id_zona')
                ->references('id')
                ->on('zonas');
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
        Schema::dropIfExists('automoviles');
    }
}
