# laravel-nova-categories
Drop-in Categories for your Laravel apps with a Nova admin dashboard.

## Requirements
- PHP 7.3+
- Laravel 7.x
- Laravel Nova 3.x
- TailwindCSS 1.6+
- TailwindUI 0.4+
- Tailwind Typography 0.2+

## Installation
```sh
composer require genealabs/laravel-nova-categories
```

## Configuration
### Migrations
```
php artisan vendor:publish --provider="GeneaLabs\\LaravelNovaCategories\\Providers\\Service" --tag=migrations
```

TBA
- migration overrides
    - disabling migrations
    - publishing migrations
- model overrides
    - adding morph-many relationships
- view overrides
    - layout override
    - content section override
