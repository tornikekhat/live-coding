<?php

namespace App\services;

use App\Repositories\interfaces\QuizRepositoryInterface;
use App\services\interfaces\QuizServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class QuizService implements QuizServiceInterface
{
    public function __construct(protected QuizRepositoryInterface $quizRepository)
    {
    }

    public function getAllQuizzes(): Collection
    {
        return $this->quizRepository->getAllQuizzes();
    }
}
