<?php

namespace App\Providers;

use App\Domain\Repositories\LectureRepositoryInterface;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Domain\Repositories\StudentRepositoryInterface;
use App\Infrastructure\Repositories\LectureRepository;
use App\Infrastructure\Repositories\StudentLectureRepository;
use App\Infrastructure\Repositories\StudentRepository;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            LectureRepositoryInterface::class,
            LectureRepository::class,
        );
        $this->app->bind(
            StudentLectureRepositoryInterface::class,
            StudentLectureRepository::class,
        );
        $this->app->bind(
            StudentRepositoryInterface::class,
            StudentRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        URL::forceScheme('https');
    }

}
