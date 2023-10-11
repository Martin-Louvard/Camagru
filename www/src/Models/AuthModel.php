<?php
namespace App\Models;

use App\Utils\DatabaseConnection;
use App\Models\UserModel;

include_once(__DIR__.'/../Utils/render.php');
include_once(__DIR__.'/../Utils/db_connection.php');

class AuthModel{
    private $mysqli;
    private $userModel;

    public function __construct() {
        // Get the database connection and instantiate UserModel
        $this->mysqli = DatabaseConnection::getInstance()->getConnection();
        $this->userModel = new UserModel();
    }

    public function authenticateUser($username, $password) {
        $userdb = $this->userModel->findByUsername($username);
        if ($userdb && password_verify($password, $userdb["password"]))
        {
            $this->startSession();
            $this->setUserSession($username);
            return true;
        }
        else
            return false;
    }

    private function startSession() {
        session_start();
    }
    
    private function setUserSession($username) {
        $_SESSION['user'] = $username;
    }
    
}