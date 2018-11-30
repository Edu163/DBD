<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
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
            $table->integer('id_users');
            $table->foreign('id_users')
                ->references('id')
                ->on('users');
            $table->integer('monto_total');
            $table->date('fecha');
            $table->float('impuesto');
            $table->string('tipo_comprobante');
            $table->string('metodo_pago');
            $table->integer('n_cuotas');
            $table->float('descuento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}