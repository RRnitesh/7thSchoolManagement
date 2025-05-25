<?php

# config/database.php
# set up database connection using Eloquent ORM

use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ .'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
# loades environment variables from .env file
# load() allows .env variables to be accessed via $_ENV superglobal

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// try {
//     Capsule::connection()->getPdo();
//     echo " Database connection successful.";
// } catch (\Exception $e) {
//     echo " Connection failed: " . $e->getMessage();
// }
