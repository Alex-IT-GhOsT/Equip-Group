<?php

namespace App\Providers;

use App\Contracts\GroupRepositoryInterface;
use App\Contracts\ServicesInterface\GroupServiceInterface;
use App\Repositories\GroupRepository;
use App\Services\GroupService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
        $this->app->bind(GroupServiceInterface::class, GroupService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
