<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt(1), 'role_id' => 1]);
        User::create(['name' => 'customer', 'email' => 'customer@gmail.com', 'password' => bcrypt(1), 'role_id' => 2]);
    }
}
