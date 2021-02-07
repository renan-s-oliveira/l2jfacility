# l2jfacility

Sample package for L2J facility functions

## Instalation

```
composer require renan-s-oliveira/l2j-facility

php artisan vendor:publish

Choose Provider L2JFacility\Providers\L2JFacilityServiceProvider
```

```
Add to config/database.php in Laravel 

'login_server' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_LOGIN', '127.0.0.1'),
            'port' => env('DB_PORT_LOGIN', '3306'),
            'database' => env('DB_DATABASE_LOGIN', 'forge'),
            'username' => env('DB_USERNAME_LOGIN', 'forge'),
            'password' => env('DB_PASSWORD_LOGIN', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'game_server' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_GAME_SERVER', '127.0.0.1'),
            'port' => env('DB_PORT_GAME_SERVER', '3306'),
            'database' => env('DB_DATABASE_GAME_SERVER', 'forge'),
            'username' => env('DB_USERNAME_GAME_SERVER', 'forge'),
            'password' => env('DB_PASSWORD_GAME_SERVER', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
```

```

Remove from .env 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Add to .env and add database information

DB_CONNECTION=login_server 
DB_HOST_LOGIN=127.0.0.1
DB_PORT_LOGIN=3306
DB_DATABASE_LOGIN=db_name_login
DB_USERNAME_LOGIN=root
DB_PASSWORD_LOGIN=

DB_HOST_GAME_SERVER=127.0.0.1
DB_PORT_GAME_SERVER=3306
DB_DATABASE_GAME_SERVER=db_name_game_server
DB_USERNAME_GAME_SERVER=root
DB_PASSWORD_GAME_SERVER=
```

## How to usage
[Português](https://github.com/renan-s-oliveira/l2jfacility/blob/main/src/usage/portugues/PORTUGUES.md)

[English](https://github.com/renan-s-oliveira/l2jfacility/blob/main/src/usage/english/ENGLISH.md)


## Quer ajudar a manter o projeto? 
## manda um PIX :)

![PIX](https://i.ibb.co/n3ww3wp/qrcode-pix.png)
