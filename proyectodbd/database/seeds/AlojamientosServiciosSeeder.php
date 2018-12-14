<?php

use App\AlojamientoServicio;
use Illuminate\Database\Seeder;

class AlojamientosServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AlojamientoServicio::class, 5)->create();
    }
}
