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
        // Perform input validation here
 
        // If input valid, call the create method on the UserModel
        $this->userModel->create();

        // Next step
        //render('/../Views/index.html');
    }

    public function read($id)
    {
        $this->userModel->findById($id);
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
    }

    public function update($id)
    {
        // Perform input validation here

        $this->userModel->update($id);
    }
}