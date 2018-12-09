<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendariosVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->foreign('id_users')
                ->references('id')
                ->on('users');
            $table->integer('año');
            $table->integer('mes');
            $table->integer('dia');
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
        Schema::dropIfExists('calendarios_vuelos');
    }
}
