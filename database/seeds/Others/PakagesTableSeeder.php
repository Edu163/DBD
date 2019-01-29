<?php

use Illuminate\Database\Seeder;
use App\Others\Package;

class PakagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pakage::class, 20)->create();
    }
}
