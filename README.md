Copia de datos útiles de .env

APP_NAME=nombreEmpresa
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=proyectodbd
DB_USERNAME=homestead
DB_PASSWORD=secret

Además se aconseja utilizar Valentina Studio para el manejo de la base de datos de PostgreSQL.

Se ha dejado el link de descarga al final del documento, es un software gratuito, pero pide registrarse para adquirir la serial de licencia gratuita.

La base de datos, desde la interfaz gráfica (Valentina Studio) se inicia con los siguientes datos:

Host: localhost
User: homestead
Password: secret
Port: 54320

Cualquier otra información referente a configuraciones o consideraciones del proyecto serán agregadas aquí.

Links de utilidad:

    Laravel/Homestead: https://laravel.com/docs/5.7/homestead
    Bootstrap: https://getbootstrap.com/
    CSS: https://www.w3schools.com/css/default.asp
    AngularJS: https://angularjs.org/
    Valentina Studio: https://valentina-db.com/en/studio/download/current
    LATAM: https://www.latam.com/es_cl/

Documentación necesaria:
https://github.com/mattwells/faker-vehicle

Comandos de utilidad 

composer dump-autoload                  -> Usar cada vez que se cambian las rutas originales.
php artisan migrate:fresh -- seed       -> Usar cada vez que se quiera recargar la base de datos.


composer require mattwells/faker-vehicle     -> Instala la dependencia necesaria para el uso de faker para automóviles