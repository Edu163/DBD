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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('acceso');
            $table->string('n_documento')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('pais');
            $table->integer('puntos')->nullable();
            $table->integer('millas')->nullable();
            $table->integer('millas_elite')->nullable();
            $table->integer('telefono');
            $table->string('categoria');
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
