<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class, 20)->create();
    }
}
