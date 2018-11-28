<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioAlojamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Servicio_Alojamiento', function (Blueprint $table) {
            $table->increments('Id_Servicio');
            $table->integer('Id_Hotel');
            $table->foreign('Id_Hotel')
                ->references('Id_Hotel')
                ->on('Hotel');
            $table->string('Nombre');
            $table->float('Precio');
            $table->string('Descripcion');
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
