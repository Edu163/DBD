<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id_proveedor');
            $table->string('politica_combus');
            $table->string('documentacion_necesaria');
            $table->string('franquicis_daños');
            $table->float('calificacion');
            $table->float('deposito_seguridad');
            $table->integer('kilometraje');
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
        Schema::dropIfExists('proveedor');
    }
}
