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
        // Display user registration form to user
        render('/../Views/user_registration.html');
    }

    public function create()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $userData = $this->userModel->registerUser($username, $email, $password);

        if ($userData) {
            // Registration successful, you can use $userData as needed
            // Redirect to a success page or perform other actions
            echo $userData["username"] . " successfully registered with email: " . $userData["email"];
        } else {
            // Registration failed, handle the error (e.g., display an error message)
            // Example: echo "Registration failed.";
            echo " Registration Failed";

        }
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