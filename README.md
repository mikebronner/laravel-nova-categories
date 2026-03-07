# laravel-nova-categories
Drop-in Categories for your Laravel apps with a Nova admin dashboard.

## Supported Versions

| Laravel | PHP     | Nova  |
|---------|---------|-------|
| 10.x    | 8.2+    | 4.x / 5.x |
| 11.x    | 8.2+    | 4.x / 5.x |
| 12.x    | 8.2+    | 4.x / 5.x |
| 13.x    | 8.2+    | 4.x / 5.x |

## Requirements
- PHP 8.2+
- Laravel 10.x – 13.x
- Laravel Nova 4.x or 5.x

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
