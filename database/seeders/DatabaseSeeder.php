<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '082232313626',
            'role' => 'admin',
            'verify' => '1',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Nisrina',
            'email' => 'nisrina@gmail.com',
            'phone' => '085678988720',
            'role' => 'member',
            'verify' => '1',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Framework'
        ]);

        Category::create([
            'name' => 'Java'
        ]);
    }
}
