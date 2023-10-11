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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle the form submission
                $username = $_POST['username'];
                $password = $_POST['password'];
            if ($this->authModel->authenticateUser($username, $password)) {
                header("Location: /");
            } else {
                echo "auth failed";
            }
        }
    }

    public function destroySession() {
        $_SESSION = array();
        session_destroy();
        header("Location: /");
    }
}