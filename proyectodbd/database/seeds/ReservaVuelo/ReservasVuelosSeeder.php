<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\ReservaVuelo;
class ReservasVuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ReservaVuelo::class, 20)->create();
    }
}
