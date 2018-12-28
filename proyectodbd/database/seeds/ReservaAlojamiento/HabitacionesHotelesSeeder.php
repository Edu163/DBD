<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\HabitacionHotel;

class HabitacionesHotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HabitacionHotel::class, 20)->create();
    }
}
