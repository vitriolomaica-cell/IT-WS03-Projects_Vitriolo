<?php

$router->get('/', 'controllers/home');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
$router->get('/listing/{id}', 'controllers/listings/show.php');