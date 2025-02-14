<?php

namespace App\Providers;

use App\Repositories\interfaces\QuizRepositoryInterface;
use App\Repositories\QuizRepository;
use App\services\interfaces\QuizServiceInterface;
use App\services\QuizService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(QuizServiceInterface::class, QuizService::class);
        $this->app->bind(QuizRepositoryInterface::class, QuizRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
