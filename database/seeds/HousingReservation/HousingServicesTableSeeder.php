<?php

use Illuminate\Database\Seeder;
use App\Modules\HousingReservation\HousingServices;


class HousingServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(HousingServices::class, 20)->create();
    }
}
