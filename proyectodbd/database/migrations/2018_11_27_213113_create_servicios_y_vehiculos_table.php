<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosYVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_y_vehiculos', function (Blueprint $table) {
            $table->integer('id_servicio');
            $table->foreign('id_servicio')
                ->references('id')
                ->on('servicios_de_vehiculos')
                ->onDelete('cascade');
            $table->string('patente');
            $table->foreign('patente')
                ->references('patente')
                ->on('automoviles')
                ->onDelete('cascade');
            $table->float('precio');
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
        Schema::dropIfExists('servicios_y_vehiculos');
    }
}
