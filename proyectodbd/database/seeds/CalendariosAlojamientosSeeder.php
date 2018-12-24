<?php

use App\CalendarioAlojamiento;
use Illuminate\Database\Seeder;

class CalendariosAlojamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CalendarioAlojamiento::class, 10)->create();
    }
}
