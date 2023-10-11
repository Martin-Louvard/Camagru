<?php
namespace App\Controllers;

use App\Models\UserModel;
include_once(__DIR__.'/../Utils/render.php');

class UserController{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function signup()
    {
        render('/../Views/user_registration.html');
    }

    public function create()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $userData = $this->userModel->registerUser($username, $email, $password);

        if ($userData)
            echo $userData["username"] . " successfully registered with email: " . $userData["email"]. " Check your email to validate your account !".  "    In User Controller #create";
        else
            echo " Registration Failed";
        
    }

    public function read($id)
    {
        return $this->userModel->findById($id);
    } 

    public function update()
    {
        echo 'in User controller update function';
        //$this->userModel->update();
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
    }

    public function show()
    {
        render('/../Views/profile.php');
    }
}