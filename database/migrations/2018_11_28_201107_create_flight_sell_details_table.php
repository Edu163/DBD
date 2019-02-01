<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightSellDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_sell_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sell_id');
            $table->foreign('sell_id')
                ->references('id')
                ->on('sells')
                ->onDelete('cascade');
            $table->float('precio');
            $table->float('descuento');
            $table->float('monto_total');
            $table->datetime('fecha');
            $table->string('tipo');
            $table->integer('cantidad');
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
        Schema::dropIfExists('flight_sell_details');
    }
}
