<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_vuelo_id');
            $table->foreign('detalle_vuelo_id')
                ->references('id')
                ->on('detalles_vuelos')
                ->onDelete('cascade');
            $table->integer('numero');
            $table->string('letra');
            $table->string('tipo'); 
            $table->string('clase');
            $table->boolean('disponible');
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
        Schema::dropIfExists('asientos');
    }
}
