<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create(['name' => 'Selangor']);
        State::create(['name' => 'Penang']);
        State::create(['name' => 'Johor']);
    }
}
