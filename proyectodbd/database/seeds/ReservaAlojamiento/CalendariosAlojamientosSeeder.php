<?php

use Illuminate\Database\Seeder;

use App\Modulos\ReservaAlojamiento\CalendarioAlojamiento;

class CalendariosAlojamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CalendarioAlojamiento::class, 20)->create();
    }
}
