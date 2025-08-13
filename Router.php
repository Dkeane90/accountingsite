<?php

class Router
{
    protected $routes = [];

    public function registerRoute($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    // get request

    public function get($uri, $controller)
    {
        $this->registerRoute("GET", $uri, $controller);
    }

    // post request

    public function post($uri, $controller)
    {
        $this->registerRoute("POST", $uri, $controller);
    }

    // put request
    public function put($uri, $controller)
    {
        $this->registerRoute("PUT", $uri, $controller);
    }

    // DELETE request
    public function delete($uri, $controller)
    {
        $this->registerRoute("DELETE", $uri, $controller);
    }

    // defined routes

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri && $route["method"] === $method) {
                require basePath($route["controller"]);
                return;
            }
        }
        http_response_code(404);
        loadView("errors/404");
        exit;
    }
}
