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
            $table->increments('id_Servicio_Alojamiento');
            $table->integer('id_Hotel');
            $table->foreign('id_Hotel')
                ->references('id_Hotel')
                ->on('Hotel');
            $table->string('nombre');
            $table->float('precio');
            $table->string('descripcion');
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
