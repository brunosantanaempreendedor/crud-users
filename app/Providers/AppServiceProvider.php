<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Logs;
use App\Models\User;

use App\Observers\CompanyObserver;
use App\Observers\LogsObserver;
use App\Observers\UsersObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UsersObserver::class);
    }
}
