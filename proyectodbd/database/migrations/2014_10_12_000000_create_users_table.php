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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('acceso');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('n_documento');
            $table->string('tipo_documento');
            $table->string('pais');
            $table->integer('puntos');
            $table->integer('millas');
            $table->integer('millas_elite');
            $table->integer('telefono');
            $table->string('fategoria');
            $table->date('fecha_nac');
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
