<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Repositories\interfaces\QuizRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class QuizRepository implements QuizRepositoryInterface
{
    public function getAllQuizzes(): Collection
    {
        return Quiz::all();
    }
}
