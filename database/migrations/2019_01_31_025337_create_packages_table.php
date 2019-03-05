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
            $table->integer('flight_id')->nullable();
            $table->foreign('flight_id')
                    ->references('id')
                    ->on('flights')
                    ->onDelete('cascade');
            $table->integer('hotel_id')->nullable();
            $table->foreign('hotel_id')
                    ->references('id')
                    ->on('hotels')
                    ->onDelete('cascade');
            $table->integer('vehicle_id')->nullable();
            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('vehicles')
                    ->onDelete('cascade');
            $table->integer('type');
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
