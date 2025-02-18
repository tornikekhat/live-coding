<?php

namespace App\Repositories\interfaces;

use Illuminate\Database\Eloquent\Collection;

interface QuizRepositoryInterface
{
    public function getAllQuizzes(): Collection;
}
