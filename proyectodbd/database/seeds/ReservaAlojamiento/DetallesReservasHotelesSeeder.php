<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\DetalleReservaHotel;

class DetallesReservasHotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleReservaHotel::class, 20)->create();
    }
}
