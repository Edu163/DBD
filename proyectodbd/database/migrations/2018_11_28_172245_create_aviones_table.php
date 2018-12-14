<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compania_id');
            $table->foreign('compania_id')
                ->references('id')
                ->on('companias');
            $table->Integer('motores');
            $table->string('modelo');
            $table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aviones');
    }
}
