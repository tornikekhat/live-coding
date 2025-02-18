<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Repositories\interfaces\QuizRepositoryInterface;
use App\services\interfaces\QuizServiceInterface;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct(protected QuizServiceInterface $quizService)
    {
    }

    public function index()
    {
        $quizzes = $this->quizService->getAllQuizzes();
        return view('quizzes.index', compact('quizzes'));
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }
}
