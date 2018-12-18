<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\OrigenDestino;

class OrigenesDestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrigenDestino::class, 20)->create();
    }
}
