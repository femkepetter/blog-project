# A blog in Laravel

## Installation Laravel and database
- composer install
- create a database (and user) with name 'blog'
- rename .env.example to .env
- set database credentials in your .env file
- php artisan migrate:fresh --seed

## Install Bootstrap UI and authentication
- composer require laravel/ui
- php artisan ui bootstrap
- php artisan ui bootstrap --auth
- npm install
- npm run dev (follow npm instructions in your terminal)
