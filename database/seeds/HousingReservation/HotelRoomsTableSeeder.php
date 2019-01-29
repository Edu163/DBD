<?php

use Illuminate\Database\Seeder;
use App\Modules\HousingReservation\HotelRooms;

class HotelRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HotelRooms::class, 20)->create();
    }
}
