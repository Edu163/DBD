<?php

use App\HabitacionServicio;
use Illuminate\Database\Seeder;

class HabitacionesServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HabitacionServicio::class, 10)->create();
    }
}
