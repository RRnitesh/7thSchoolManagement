<?php
# all the http request will be handled here


// Load route definitions

use Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ .'/../config/database.php';

$routes = require_once __DIR__ .'/../routes/web.php';

$router = new Router($routes);

$router->dispatch($_SERVER['REQUEST_URI']);