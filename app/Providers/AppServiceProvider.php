<?php

namespace App\Providers;

use App\Domain\Repositories\LectureRepositoryInterface;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Infrastructure\Repositories\LectureRepository;
use App\Infrastructure\Repositories\StudentLectureRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }

}
