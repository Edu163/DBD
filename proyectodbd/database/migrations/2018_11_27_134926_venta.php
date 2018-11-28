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
            $table->increments('Id_Venta');
            $table->integer('Id_Usuario');
            $table->foreign('Id_Usuario')
                ->references('Id_Usuario')
                ->on('Usuario');
            $table->integer('Monto_Total');
            $table->date('Fecha');
            $table->float('Impuesto');
            $table->string('Tipo_Comprobante');
            $table->string('Metodo_Pago');
            $table->integer('N_Cuotas');
            $table->float('Descuento');
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