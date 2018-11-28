<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->foreign('id_user')
                ->references('id')
                ->on('users');
            $table->float('impuesto');
            $table->float('descuento');
            $table->float('monto_total');
            $table->datetime('fecha');
            $table->string('metodo_pago');
            $table->integer('numero_cuotas');
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
        Schema::dropIfExists('venta');
    }
}
