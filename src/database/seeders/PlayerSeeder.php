<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        Player::create([
            'name' => 'Lionel Messi',
            'age' => 36,
            'position' => 'Forward',
            'club_id' => 1,
            'nationality' => 'Argentina',
            'height' => 170,
            'weight' => 72,
            'preferred_foot' => 'Left',
            'jersey_number' => 10,
        ]);

        Player::create([
            'name' => 'Bruno Fernandes',
            'age' => 29,
            'position' => 'Midfielder',
            'club_id' => 2,
            'nationality' => 'Portugal',
            'height' => 179,
            'weight' => 69,
            'preferred_foot' => 'Right',
            'jersey_number' => 8,
        ]);

        Player::create([
            'name' => 'Vinicius Jr.',
            'age' => 24,
            'position' => 'Forward',
            'club_id' => 3,
            'nationality' => 'Brazil',
            'height' => 176,
            'weight' => 73,
            'preferred_foot' => 'Right',
            'jersey_number' => 7,
        ]);
    }
}
