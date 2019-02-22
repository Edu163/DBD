<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sell_id')->nullable();
            $table->foreign('sell_id')
                  ->references('id')
                  ->on('sells')
                  ->onDelete('cascade');
            $table->float('monto_total')->nullable();
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
        Schema::dropIfExists('vehicle_reservations');
    }
}
