<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        Club::create([
            'name' => 'Barcelona',
            'city' => 'Barcelona',
            'stadium' => 'Camp Nou',
            'founded_year' => 1899,
            'coach_name' => 'Xavi Hernandez',
        ]);

        Club::create([
            'name' => 'Manchester United',
            'city' => 'Manchester',
            'stadium' => 'Old Trafford',
            'founded_year' => 1878,
            'coach_name' => 'Erik ten Hag',
        ]);

        Club::create([
            'name' => 'Real Madrid',
            'city' => 'Madrid',
            'stadium' => 'Santiago Bernabéu',
            'founded_year' => 1902,
            'coach_name' => 'Carlo Ancelotti',
        ]);
    }
}
