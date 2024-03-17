<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Game::table('games')->insert([
        //     'name' => Str::random(10),),
        // ]);

        // Game::factory(100)->create();

        // Define the list of 10 famous esports games
        $games = [
            'League of Legends',
            'Counter-Strike: Global Offensive',
            'Dota 2',
            'Overwatch',
            'Rainbow Six Siege',
            'Rocket League',
            'Fortnite',
            'Call of Duty: Warzone',
            'Valorant',
            'Apex Legends',
        ];

        // Seed the games into the database
        foreach ($games as $game) {
            DB::table('games')->insert([
                'name' => $game,
            ]);
        }
    }
}
