<?php

namespace GeneaLabs\LaravelNovaCategories\Providers;

use GeneaLabs\LaravelNovaCategories\Nova\Category;
use GeneaLabs\LaravelNovaCategories\Category as CategoryModel;
use Laravel\Nova\Nova as LaravelNova;
use Laravel\Nova\NovaApplicationServiceProvider;

class Nova extends NovaApplicationServiceProvider
{
    protected function resources()
    {
        Category::$model = CategoryModel::model();
        
        (new LaravelNova())->resources([
            Category::class,
        ]);
    }
}
