<?php

use App\ServicioAlojamiento;
use Illuminate\Database\Seeder;

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
