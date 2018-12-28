<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\Automovil;

class AutomovilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Automovil::class, 20)->create();
    }
}
