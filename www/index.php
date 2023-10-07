<?php
    require 'vendor/autoload.php';

    $request_url = $_GET['url'];
    $router = new App\Router\Router($request_url);
    $router->get('/', function(){ echo "Bienvenue sur ma homepage !"; });
    $router->get('/signup', 'User#signup');
    $router->post('/signup', 'User#create');
    $router->run();
    