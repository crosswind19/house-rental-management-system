<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyType::create(['name' => 'Apartment']);
        PropertyType::create(['name' => 'Landed']);
        PropertyType::create(['name' => 'Condo']);
    }
}
