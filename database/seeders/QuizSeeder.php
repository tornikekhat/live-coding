<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::factory()
            ->count(5)
            ->has(
                Question::factory()
                ->count(5)
                ->has(
                    Answer::factory()->count(4),
                    'answers'
                ),
                'questions'
            )
            ->create();
    }
}
