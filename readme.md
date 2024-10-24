# Poc Laravel

# Tecnologias Utilizadas

- Laravel 11
- Php 8.3
- MySql 9
- Docker
- Composer 2

# Inicialização

1. docker-compose up -d
2. docker exec -it composer-2 bash
    1. composer config -g repo.packagist composer https://packagist.org
    2. composer config -g github-protocols https ssh
    3. composer create-project --prefer-dist laravel/laravel:11.0 src
3. docker exec -it php-8.3 bash 
    1. php artisan serve --host 0.0.0.0
4. npm install
    1. npm run build 
5. docker exec -it php-8.3 bash 
    1. php artisan make:controller SeriesController
6. docker exec -it php-8.3 bash 
    1. php artisan make:migration create_series_table
    2. php artisan migrate
7. docker exec -it php-8.3 bash
    1. php artisan make:model Serie
8. docker exec -it php-8.3 bash
    1. php artisas make:request SeriesFormRequest 
9. docker exec -it php-8.3 bash
    1. php artisan lang:publish
10. docker exec -it composer-2 bash
    1. cd src
    2. composer require lucascudo/laravel-pt-br-localization --dev
11. docker exec -it php-8.3 bash 
    php artisan vendor:publish --tag=laravel-pt-br-localization
12. docker exec -it php-8.3 bash 
    1. php artisan make:model Season -m
13. docker exec -it php-8.3 bash 
    1. php artisan make:model Episode -m
14. docker exec -it php-8.3 bash
    1. php artisan migrate
15. docker exec -it php-8.3 bash
    1. php artisan migrate:fresh
16. docker exec -it php-8.3 bash
    1. php artisan make:controller SeasonsController
17. docker exec -it composer-2 bash
    1. cd src
    2. composer require barryvdh/laravel-debugbar --dev
    3. Caso queira publicar: php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
18. docker exec -it php-8.3 bash
    1. php artisan make:provider SeriesRepositoryProvider
19. docker exec -it php-8.3 bash
    1. php artisan make:migration --table=episodes add_watched_episode
    2. php artisan migrate
20. docker exec -it php-8.3 bash
    1. php artisan make:middleware Autenticador
21. docker exec -it php-8.3 bash
    1. php artisan make:mail SeriesCreated
22. docker exec -it php-8.3 bash
    1. php artisan queue:table
    2. php artisan migrate
    3. php artisan tinker
    4. DB::select('select * from jobs;');
    5. php artisan queue:work
    6. php artisan tinker
    7. DB::select('select * from failed_jobs;');
    8. php artisan queue:retry "all"
    9. php artisan queue:work --tries=2 --delay=10

## Execução

1. docker-compose up -d
    1. docker exec -it composer-2 bash
        1. cd src
        2. composer config -g repo.packagist composer https://packagist.org
        3. composer config -g github-protocols https ssh
        4. composer install
    2. npm install
        1. npm run build
    3. docker exec -it php-8.3 bash 
        1. php artisan migrate
        2. php artisan serve --host 0.0.0.0

