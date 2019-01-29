<?php

use Illuminate\Database\Seeder;
use App\Others\Sell;

class SellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sell::class, 20)->create();
    }
}
