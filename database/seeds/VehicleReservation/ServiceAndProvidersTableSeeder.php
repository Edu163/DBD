<?php

use Illuminate\Database\Seeder;

class ServiceAndProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServiceAndProvider::class, 20)->create();
    }
}
