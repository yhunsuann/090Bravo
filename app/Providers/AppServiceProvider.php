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
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Repositories\BlogRepository;
use App\Repositories\Interfaces\BlogTranslateRepositoryInterface;
use App\Repositories\BlogTranslateRepository;
use App\Repositories\Interfaces\PostTranslateRepositoryInterface;
use App\Repositories\PostTranslateRepository;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Repositories\ContactRepository;

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
        
        $this->app->bind(
            BlogRepositoryInterface::class,BlogRepository::class
        );

        $this->app->bind(
            BlogTranslateRepositoryInterface::class, BlogTranslateRepository::class
        );

        $this->app->bind(
            PostRepositoryInterface::class, PostRepository::class
        );
        $this->app->bind(
            PostTranslateRepositoryInterface::class, PostTranslateRepository::class
        );
        $this->app->bind(
            ContactRepositoryInteface::class, ContactRepository::class
        );
    }
    
    public function boot(): void
    {
        Paginator::useBootstrap();  
    }
}
