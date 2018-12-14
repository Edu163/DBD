<?php

use App\Habitacion;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Habitacion::class, 10)->create();
    }
}
