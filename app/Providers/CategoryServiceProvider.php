<?php
namespace app\Providers;

use Illuminate\Support\ServiceProvider;
use app\core\financeiro\category\resource\interface\int_resource_category;
use app\core\financeiro\category\resource\ResourceCategory;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->bind(int_resource_category::class, ResourceCategory::class);
    }

    public function boot()
    {
        
    }
}
