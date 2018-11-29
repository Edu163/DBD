<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('id_Usuario');
=======
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acceso');
            $table->string('name');
>>>>>>> development
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('acceso');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('n_Documento');
            $table->string('tipo_Documento');
            $table->string('pais');
            $table->integer('puntos');
            $table->integer('millas');
            $table->integer('millas_Elite');
            $table->integer('telefono');
            $table->string('fategoria');
            $table->date('fecha_Nac');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
