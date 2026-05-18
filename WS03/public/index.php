<?php
init_set('display_errors', 1);
error_reporting(E_ALL);

require '../helpers.php';
require basePath('Routers.php');
require basePath('Database');

$router = new Router();

$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];
$uri = $_SERVER['REQUEST_URI'];
if (array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);
}
