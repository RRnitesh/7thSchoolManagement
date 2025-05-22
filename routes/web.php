<?php

use App\Controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';
# web.php (fix the filename extension if it's not .php)

# on the provided url it only returns the path say http://localhost/SchoolManagementSystem/public/product?id=5
# then it gets /SchoolManagementSystem/product only other parts are ignored 
# but still the query string is available using GET
# about the parse_url function it will return array of parts of the url like path, query, fragement etc
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace('/SchoolManagementSystem/public', '', $uri);
# it will remove the public part from the url and gives us the path


if ($uri === '' || $uri === '/') {
    $home = new HomeController();
    $home->index();
}else if ($uri === '/about') {
    $home = new HomeController();
    $home->about();
}else{
  return http_response_code(404);
}
