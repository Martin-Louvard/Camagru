<?php
    require 'vendor/autoload.php';
    require_once('src/Utils/render.php');
    session_start();

    $request_url = $_GET['url'];
    $router = new App\Router\Router($request_url);
    $router->get('/', function(){ render('/../Views/home.php');});
    $router->get('/login', 'Auth#login');
    $router->post('/login', 'Auth#authenticate');
    $router->get('/logout', 'Auth#destroySession');
    $router->get('/signup', 'User#signup');
    $router->post('/signup', 'User#create');
    $router->get('/profile', 'User#show');
    $router->post('/profile', 'User#update');

    $router->run();
    