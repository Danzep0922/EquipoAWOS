<?php
//https://desarrolloweb.com/articulos/variables-entorno-php-env.html

require('./vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

 print_r($_ENV);

 echo "\n" . $_ENV['DB_CONNECTION'];
 echo "\n" . $_ENV['DB_HOST'];
 echo "\n" . $_ENV['DB_PORT'];
 echo "\n" . $_ENV['DB_DATABASE'];
 echo "\n" . $_ENV['DB_USERNAME'];
 echo "\n" . $_ENV['DB_PASSWORD'];
