# CrateDB Laravel 5.8 Demo App

Demo Laravel app for showcasing CrateDB features.

Note: This app a work in progress


# Setup CrateDB for fresh Laravel install
Install CrateDB Laravel driver: https://github.com/RatkoR/laravel-crate.io

## .env
```bash
CRATEDB_HOST=localhost
CRATEDB_DATABASE=laravelapp
CRATEDB_PORT=4200
```

## database.php config
```php
'crate' => array(
    'driver'   => 'crate',
    'host'     => env('CRATEDB_HOST', 'localhost'),
    'database' => env('CRATEDB_DATABASE', 'laravelapp'),
    'port'     => env('CRATEDB_PORT', 4200),
),
```


## Run CrateDB Migrations
```bash
migrate:refresh --path database/cratedb/
```