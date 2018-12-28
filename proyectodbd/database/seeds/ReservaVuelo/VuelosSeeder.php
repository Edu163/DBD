<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\Vuelo;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Vuelo::class, 20)->create();
    }
}
