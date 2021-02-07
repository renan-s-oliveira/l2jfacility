# l2jfacility

Sample package for L2J facility functions

## Instalation

```
composer require renan-s-oliveira/l2j-facility

php artisan vendor:publish --provider="vendor\renan-s-oliveira\L2JFacilityServiceProvider" --force
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


## Helps maintain the L2JFacility project

PayPal QRCode

![PIX](https://github.com/renan-s-oliveira/l2jfacility/blob/main/src/donate/qrcodepix.png)
