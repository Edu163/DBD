<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users');
            $table->integer('monto_total');
            $table->date('fecha');
            $table->float('impuesto');
            $table->string('tipo_comprobante');
            $table->string('metodo_pago');
            $table->integer('n_cuotas');
            $table->float('descuento');
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
        Schema::dropIfExists('ventas');
    }
}