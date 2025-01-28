<?php

namespace App\Providers;

use app\core\financeiro\resource\interface\int_resource_transaction;
use app\core\financeiro\resource\ResourceTransaction;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(int_resource_transaction::class, ResourceTransaction::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
