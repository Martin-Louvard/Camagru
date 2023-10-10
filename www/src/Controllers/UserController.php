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
            echo $userData["username"] . " successfully registered with email: " . $userData["email"];
        else
            echo " Registration Failed";
        
    }

    public function read($id)
    {
        $this->userModel->findById($id);
    }

    public function update($id)
    {
        // Perform input validation here

        $this->userModel->update($id);
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
    }
}