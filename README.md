PROYECTO PRUEBA
AL HACER CLONE DEBE REALIZAR

1) cp .env.example .env
2) composer install
3) php artisan key:generate
4) Configurar el archivo .env, especificamente las variables referentes a DB

Ejemplo:
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=prueba
    DB_USERNAME=admin
    DB_PASSWORD=123
    
5) php artisan migrate
