<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlojamientoServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamiento_servicio', function (Blueprint $table) {
            $table->integer('id_servicio_alojamiento');
            $table->foreign('id_servicio_alojamiento')
                ->references('id_servicio_alojamiento')
                ->on('servicio_alojamiento');
            $table->integer('id_alojamiento_privado');
            $table->foreign('id_alojamiento_privado')
                ->references('id_alojamiento_privado')
                ->on('alojamiento_privado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
