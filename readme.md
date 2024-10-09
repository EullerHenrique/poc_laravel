# Poc Laravel e Php Moderno

# Tecnologias Utilizadas

- Laravel 11
- Php 8.3
- MySql 9
- Docker

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

## Execução

1. docker-compose up -d
1.2. composer config -g repo.packagist composer https://packagist.org
1.3. composer config -g github-protocols https ssh
2.1 docker exec -it php-8.3 bash 
2.2 php artisan serve --host 0.0.0.0

