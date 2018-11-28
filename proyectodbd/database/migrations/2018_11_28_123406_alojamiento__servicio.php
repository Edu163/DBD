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
        Schema::create('Alojamiento_Servicio', function (Blueprint $table) {
            $table->integer('id_Servicio_Alojamiento');
            $table->foreign('id_Servicio_Alojamiento')
                ->references('id_Servicio_Alojamiento')
                ->on('Servicio_Alojamiento');
            $table->integer('id_Alojamiento_Privado');
            $table->foreign('id_Alojamiento_Privado')
                ->references('id_Alojamiento_Privado')
                ->on('Alojamiento_Privado');
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
