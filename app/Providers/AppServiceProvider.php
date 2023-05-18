<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\RecruitmentRepository;
use App\Repositories\Interfaces\LanguageRepositoryInterface;
use App\Repositories\LanguageRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\RecruitmentTranslateRepositoryInterface;
use App\Repositories\RecruitmentTranslateRepository;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RecruitmentRepositoryInterface::class, RecruitmentRepository::class
        );
    
        $this->app->bind(
            LanguageRepositoryInterface::class, LanguageRepository::class
        );
    
        $this->app->bind(
            UserRepositoryInterface::class, UserRepository::class
        );

        $this->app->bind(
            RecruitmentTranslateRepositoryInterface::class, RecruitmentTranslateRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();  
    }
}
