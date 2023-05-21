<?php

namespace Database\Factories;


use App\Models\Archive;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArchiveFactory extends Factory
{
    protected $model = Archive::class;

    public function definition()
    {
        return [
            'white_name' => $this->faker->name,
            'black_name' => $this->faker->name,
            'date' => $this->faker->date(),
            'score' => $this->faker->numberBetween(0, 100),
            'chess_game' => "rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1"
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
        ];
    }
}