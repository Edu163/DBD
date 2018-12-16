<?php

use App\HabitacionHotel;
use Illuminate\Database\Seeder;

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
