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
            'club_id' => 1
        ]);

        Player::create([
            'name' => 'Bruno Fernandes',
            'age' => 29,
            'position' => 'Midfielder',
            'club_id' => 2
        ]);

        Player::create([
            'name' => 'Vinicius Jr.',
            'age' => 24,
            'position' => 'Forward',
            'club_id' => 3
        ]);
    }
}

