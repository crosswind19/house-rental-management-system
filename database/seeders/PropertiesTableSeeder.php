<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            'property_name' => 'Luxury Condo',
            'property_type' => 'Condo',
            'description' => 'A luxury condo located in the heart of the city.',
            'address' => '123 Main St',
            'city' => 'Cityville',
            'state' => 'Stateland',
            'zipcode' => '12345',
            'country' => 'Countryland',
            'price' => 1000000.00,
            'photo' => json_encode(['photos/condo1.jpg', 'photos/condo2.jpg']),
            'bedroom' => 3,
            'bathroom' => 2,
            'car_park' => 2,
            'build_up_area' => '1200 sqft',
            'furnishing' => 'Fully Furnished',
            'occupancy' => false,
            'availability' => true,
            'user_id' => 1, // Make sure this user_id exists in your users table
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
