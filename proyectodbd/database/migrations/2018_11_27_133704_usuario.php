<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            
            $table->increments('Id_Usuario');
            $table->string('Acceso');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('N_Documento');
            $table->string('Tipo_Documento');
            $table->string('Pais');
            $table->integer('Puntos');
            $table->string('Email');
            $table->integer('Millas');
            $table->integer('Millas_Elite');
            $table->string('Contraseña');
            $table->integer('Telefono');
            $table->string('Categoria');
            $table->date('Fecha_Nac');
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
