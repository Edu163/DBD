<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servicio');
            $table->foreign('id_servicio')
                ->references('id')
                ->on('servicios_de_vehiculos');
            $table->integer('id_proveedor');
            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedores');
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
        Schema::dropIfExists('servicios_proveedores');
    }
}
