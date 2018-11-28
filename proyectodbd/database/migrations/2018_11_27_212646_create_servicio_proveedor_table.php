<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_proveedor', function (Blueprint $table) {
            $table->foreign('id_servicio')
                ->references('id_servicio')
                ->on('servicio_de_vehiculo');
            $table->foreign('id_proveedor')
                ->references('id_proveedor')
                ->on('proveedor');
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
        Schema::dropIfExists('servicio_proveedor');
    }
}
