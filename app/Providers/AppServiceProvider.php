<?php

namespace App\Providers;

use App\Domain\Repositories\LectureRepositoryInterface;
use App\Infrastructure\Repositories\LectureRepository;
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
            LectureRepository::class
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
