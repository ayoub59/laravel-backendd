<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Archive;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Archive::create([
            'white_name' => 'ayoub',
            'black_name' => 'abdo',
            'score' => 2000,
            'chess_game' => 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1',
            'date' => '2022-05-09',
        ]);
        Archive::create([
            'white_name' => 'hosam',
            'black_name' => 'ayman',
            'score' => 2000,
            'chess_game' => 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1',
            'date' => '2022-05-09',
        ]);
    }
}
