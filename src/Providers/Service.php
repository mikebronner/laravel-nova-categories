<?php

namespace GeneaLabs\LaravelNovaCategories\Providers;

use GeneaLabs\LaravelNovaCategories\Category;
use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        if (Category::runsMigrations()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        }

        $this->publishes(
            [
                __DIR__ . '/../../database/migrations' => database_path("migrations")
            ],
            'migrations'
        );
    }

    public function register()
    {
        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views',
            'laravel-nova-categories'
        );
    }
}
