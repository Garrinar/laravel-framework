#!/usr/bin/env bash

composer update
rm -rf .git
php artisan down
php artisan key:generate
php artisan migrate:install
php artisan files:table
php artisan queue:table
php artisan cache:table
php artisan session:table
php artisan make:auth
php artisan vendor:publish
php artisan clear-compiled
composer dump-autoload
php artisan optimize
php artisan up
rm install.sh

