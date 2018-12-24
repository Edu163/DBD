<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\ServicioProveedor;

class ServiciosProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServicioProveedor::class, 20)->create();
    }
}