<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patente')->unique();
            $table->integer('calendario_vehiculo_id');
            $table->foreign('calendario_vehiculo_id')
                ->references('id')
                ->on('calendarios_vehiculos')
                ->onDelete('cascade');
            $table->integer('proveedor_id');
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedores')
                ->onDelete('cascade');
            $table->integer('zona_id');
            $table->foreign('zona_id')
                ->references('id')
                ->on('zonas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('vehiculos');
    }
}
