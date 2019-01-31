<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('airplane_id');
            // $table->foreign('airplane_id')
            //     ->references('id')
            //     ->on('airplanes')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('seats');
    }
}
