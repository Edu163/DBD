<?php

use Illuminate\Database\Seeder;
use App\Modules\Others\Package;

class PakagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Package::class, 20)->create();
    }
}
