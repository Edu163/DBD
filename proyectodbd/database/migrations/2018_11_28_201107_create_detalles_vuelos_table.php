<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vuelo_id');
            $table->foreign('vuelo_id')
                ->references('id')
                ->on('vuelos');
            $table->integer('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('avion_id');
            $table->foreign('avion_id')
                ->references('id')
                ->on('aviones');
            /*$table->integer('id_calendario_vuelo');
            $table->foreign('id_calendario_vuelo')
                ->references('id')
                ->on('calendarios_vuelos');*/
            $table->datetime('fecha_despegue');
            $table->datetime('fecha_aterrizaje');
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
        Schema::dropIfExists('detalles_vuelos');
    }
}
