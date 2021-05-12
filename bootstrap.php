<?php

require __DIR__."/vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$route = new App\Router($method, $path);

$route->get('/ola-{nome}', function ($params) { return "Bem vindo(a) ".$params[1]; });

$result = $route->handler();

if (!$result) {
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($route->getParams());