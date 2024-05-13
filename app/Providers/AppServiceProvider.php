<?php

namespace App\Providers;

use App\Repositories\Product\ProductRepositories;
use App\Repositories\Product\ProductRepositoriesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Product
        $this->app->singleton(
            ProductRepositoriesInterface::class,
            ProductRepositories::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
