<?php
namespace App\Controllers;

use App\Models\AuthModel;
include_once(__DIR__.'/../Utils/render.php');

class AuthController{
    private $authModel;

    public function __construct(){
        $this->authModel = new AuthModel();
    }

    public function login()
    {
        render('/../Views/login.html');
    }

    public function authenticate()
    {
        // Implement Authentication Logic here or in Auth Model
        echo "User authenticated";
    
    }
}