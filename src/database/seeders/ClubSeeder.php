<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        Club::create(['name' => 'Barcelona', 'city' => 'Barcelona']);
        Club::create(['name' => 'Manchester United', 'city' => 'Manchester']);
        Club::create(['name' => 'Real Madrid', 'city' => 'Madrid']);
    }
}

