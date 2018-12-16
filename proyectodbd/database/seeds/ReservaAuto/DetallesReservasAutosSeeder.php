<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\DetalleReservaAuto;

class DetallesReservasAutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleReservaAuto::class, 20)->create();
    }
}
