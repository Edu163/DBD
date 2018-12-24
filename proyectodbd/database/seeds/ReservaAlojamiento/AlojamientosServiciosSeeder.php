<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\AlojamientoServicio;

class AlojamientosServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AlojamientoServicio::class, 20)->create();
    }
}
