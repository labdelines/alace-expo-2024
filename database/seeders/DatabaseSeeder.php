<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'paokue',
            'username' => 'paul',
            'email' => 'paokue77@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
