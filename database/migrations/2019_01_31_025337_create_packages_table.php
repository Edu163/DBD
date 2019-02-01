<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flight_id');
            $table->foreign('flight_id')
                    ->references('id')
                    ->on('flights');
            $table->integer('hotel_id');
            $table->foreign('hotel_id')
                    ->references('id')
                    ->on('hotels');
            $table->integer('vehicle_id');
            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('vehicles');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('packages');
    }
}
