<?php

use Illuminate\Database\Seeder;
use App\Modules\HousingReservation\HotelRoom;

class HotelRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HotelRoom::class, 500)->create();
    }
}
