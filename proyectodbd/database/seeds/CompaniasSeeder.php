<?php

use App\Compania;	
use Illuminate\Database\Seeder;

class CompaniasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Compania::class, 10)->create();
    }
}
