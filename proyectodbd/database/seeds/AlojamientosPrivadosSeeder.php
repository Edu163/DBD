<?php

use App\AlojamientoPrivado;
use Illuminate\Database\Seeder;

class AlojamientosPrivadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AlojamientoPrivado::class, 10)->create();
    }
}
