<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\AlojamientoPrivado;

class AlojamientosPrivadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AlojamientoPrivado::class, 20)->create();
    }
}
