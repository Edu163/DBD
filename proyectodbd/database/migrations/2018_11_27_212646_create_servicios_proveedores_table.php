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
            $table->integer('servicio_id');
            $table->foreign('servicio_id')
                ->references('id')
                ->on('servicios_de_vehiculos')
                ->onDelete('cascade');
            $table->integer('proveedor_id');
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedores')
                ->onDelete('cascade');
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
