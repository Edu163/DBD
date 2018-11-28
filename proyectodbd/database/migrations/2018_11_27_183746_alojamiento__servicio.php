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
            $table->integer('Id_Servicio');
            $table->foreign('Id_Servicio')
                ->references('Id_Servicio')
                ->on('Servicio_Alojamiento');
            $table->integer('Id_Alojam_Priva');
            $table->foreign('Id_Alojam_Priva')
                ->references('Id_Alojam_Priva')
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
