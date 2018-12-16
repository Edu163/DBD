<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\Proveedor;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proveedor::class, 20)->create();
    }
}
