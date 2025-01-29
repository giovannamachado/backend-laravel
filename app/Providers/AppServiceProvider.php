<?php

namespace app\Providers;

use app\core\financeiro\category\resource\interface\int_resource_category;
use app\core\financeiro\category\resource\ResourceCategory;
use app\core\financeiro\transaction\resource\interface\int_resource_transaction;
use app\core\financeiro\resource\ResourceTransaction;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\VarDumper\Caster\ResourceCaster;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(int_resource_transaction::class, ResourceTransaction::class);
        $this->app->bind(int_resource_category::class, ResourceCategory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
