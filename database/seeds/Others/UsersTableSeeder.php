<?php

use Illuminate\Database\Seeder;
use App\Modules\Others\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 19)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.cl',
            'password' => '$2y$10$WSOF2xVdqFqbjZDCppkOKe1K6bMPnJiw6631jrrRkdeFb13jnaKyK', //admin
            ]);
    }
}
