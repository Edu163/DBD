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
        Schema::create('Venta', function (Blueprint $table) {
            $table->increments('id_Venta');
            $table->integer('id_Usuario');
            $table->foreign('id_Usuario')
                ->references('id_Usuario')
                ->on('Usuario');
            $table->integer('monto_Total');
            $table->date('fecha');
            $table->float('impuesto');
            $table->string('tipo_Comprobante');
            $table->string('metodo_Pago');
            $table->integer('n_Cuotas');
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