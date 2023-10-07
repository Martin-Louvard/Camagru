<?php
    require 'vendor/autoload.php';
    require_once('src/Utils/render.php');
    
    $request_url = $_GET['url'];
    $router = new App\Router\Router($request_url);
    $router->get('/', function(){ render('/../Views/index.html');});
    $router->get('/signup', 'User#signup');
    $router->post('/signup', 'User#create');
    $router->run();
    