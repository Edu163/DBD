<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();

        User::create([
            'nombre' => 'Omar',
            'apellido' => 'Carrasco',
            'email' => 'omar.carrasco@usach.cl',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'acceso' => 'Administrador',
            'n_documento' => null,
            'tipo_documento' => null,
            'pais' => 'Chile',
            'puntos' => 9999,
            'millas' => 9999,
            'millas_elite' => 9999,
            'telefono' => 942723136,
            'categoria' => 'Premium',
            'fecha_nac' => '1996-06-27',
            ]);
    }
}
