<?php

namespace Core;


class Router{

    protected $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $requestUri)
    {
        $path = parse_url($requestUri, PHP_URL_PATH);
        $path = str_replace('/SchoolManagementSystem/public', '', $path);

        if (isset($this->routes[$path])) {
            [$controller, $method] = $this->routes[$path];
            $controllerInstance = new $controller();
            return call_user_func([$controllerInstance, $method]);
        }

        http_response_code(404);
        echo "404 Not Found";
    }
  
}
