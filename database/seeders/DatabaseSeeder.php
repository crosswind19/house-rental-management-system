<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kah',
            'email' => 'crosswind1902@gmail.com',
            'password' => bcrypt('password'),
            'roles' => 3
        ]);

        User::factory()->create([
            'name' => 'KX',
            'email' => 'kahxuan1902@gmail.com',
            'password' => bcrypt('password'),
            'roles' => 2 
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'roles' => 1
        ]);

        $this->call([
            PropertiesTableSeeder::class,
        ]);

        
    }
}
