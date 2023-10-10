<?php
    require 'vendor/autoload.php';
    require_once('src/Utils/render.php');
    
    $request_url = $_GET['url'];
    $router = new App\Router\Router($request_url);
    $router->get('/', function(){ render('/../Views/login.html');});
    $router->get('/login', 'Auth#login');
    $router->post('/login', 'Auth#authenticate');
    $router->get('/signup', 'User#signup');
    $router->post('/signup', 'User#create');
    $router->run();
    