# laravel-nova-categories
Drop-in Categories for your Laravel apps with a Nova admin dashboard.

## Requirements

| Software | Supported Versions |
|----------|-------------------|
| PHP | 8.2, 8.3, 8.4, 8.5 |
| Laravel | 10.x, 11.x, 12.x |
| Laravel Nova | 4.x, 5.x |

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
