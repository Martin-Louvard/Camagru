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
    

}