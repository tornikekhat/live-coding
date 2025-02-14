<?php

namespace App\Http\Controllers;

use App\Mail\QuizResultMail;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuizResultController extends Controller
{
    public function store(Request $request, Quiz $quiz): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'answers' => 'required|array',
        ]);

        $correctAnswers = 0;
        foreach ($quiz->questions as $question) {
            $correctOptions = $question->answers()->where('is_correct', true)->pluck('id')->toArray();
            $userAnswers = $request->input('answers.' . $question->id, []);

            if (!array_diff($userAnswers, $correctOptions) && !array_diff($correctOptions, $userAnswers)) {
                $correctAnswers++;
            }
        }

        $score = round($correctAnswers / $quiz->questions()->count() * 100);

        QuizResult::create([
            'quiz_id' => $quiz->id,
            'user_email' => $validated['email'],
            'score' => $score,
        ]);

        Mail::to($validated['email'])->send(new QuizResultMail($quiz, $score));

        return redirect()->route('quizzes.index')->with('success', 'Your score is ' . $score . '%');
    }
}
