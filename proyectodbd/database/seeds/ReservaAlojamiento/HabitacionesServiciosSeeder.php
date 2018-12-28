<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\HabitacionServicio;

class HabitacionesServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HabitacionServicio::class, 20)->create();
    }
}
