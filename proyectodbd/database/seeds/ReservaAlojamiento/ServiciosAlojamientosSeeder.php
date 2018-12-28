<?php

use Illuminate\Database\Seeder;

use App\Modulos\ReservaAlojamiento\ServicioAlojamiento;

class ServiciosAlojamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(ServicioAlojamiento::class, 20)->create();
    }
}
