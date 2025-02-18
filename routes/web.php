<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizResultController;
use Illuminate\Support\Facades\Route;

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quizzes/{quiz}/results', [QuizResultController::class, 'store'])->name('quiz-results.store');
