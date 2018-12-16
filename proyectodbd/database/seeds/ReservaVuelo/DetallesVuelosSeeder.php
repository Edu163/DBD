<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\DetalleVuelo;

class DetallesVuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleVuelo::class, 20)->create();
    }
}
