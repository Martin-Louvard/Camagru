<?php
namespace App\Models;
use App\Utils\DatabaseConnection;

include_once(__DIR__.'/../Utils/render.php');
include_once(__DIR__.'/../Utils/db_connection.php');

class UserModel{
    private $mysqli;

    public function __construct() {
        // Get the database connection
        $this->mysqli = DatabaseConnection::getInstance()->getConnection();
    }
    
    // Create a new user
    public function create($username, $email, $hashedPassword) {
        // Prepare the SQL query to avoid SQL injection
        $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($this->mysqli, $query);
        
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
        
        // Execute the statement
        $result = mysqli_stmt_execute($stmt);
        
        if (!$result) {
            die('Query Error: ' . mysqli_error($this->mysqli));
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
        
        // Return any necessary information, e.g., the inserted user's ID
        return mysqli_insert_id($this->mysqli);        
    }

    // Read user by ID
    public function findById($id) {

        $query = "SELECT * FROM users WHERE id = ?";
    
        $stmt = mysqli_prepare($this->mysqli, $query);
        mysqli_stmt_bind_param($stmt, "s", $id);
        
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            mysqli_stmt_close($stmt);

            return $user;
        } else {
            die('Query Error: ' . mysqli_error($this->mysqli));
        }
    }

    public function findByUsername($username) {
        $query = "SELECT * FROM users WHERE username = ?";
    
        $stmt = mysqli_prepare($this->mysqli, $query);
        mysqli_stmt_bind_param($stmt, "s", $username);
        
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            mysqli_stmt_close($stmt);

            return $user;
        } else {
            die('Query Error: ' . mysqli_error($this->mysqli));
        }
    }

    public function update($id, $username, $email, $password) {

        if (empty($id) || empty($username) || empty($email) || empty($password)) {
            return false; // Input validation failed
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL query to update user information
        $query = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
        
        // Prepare the statement
        $stmt = mysqli_prepare($this->mysqli, $query);
        
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $hashedPassword, $id);
        
        // Execute the statement
        $result = mysqli_stmt_execute($stmt);
        
        if (!$result) {
            die('Query Error: ' . mysqli_error($this->mysqli));
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
        $updatedUser = $this->findById($id); // Define a method to get a user by ID
        $_SESSION['user'] = $username;
        return $updatedUser;

    }
    

    // Delete user
    public function delete($id) {
        // Delete the database record associated with the current object's ID
        // This part will depend on your database implementation
    }

    public function registerUser($username, $email, $password) {
        // Basic input validation (you should enhance this)
        if (empty($username) || empty($email) || empty($password)) {
            return false; // Input validation failed
        }
    
        // You should perform more advanced input validation here (e.g., email format).
    
        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Create a new user in the database
        $result = $this->create($username, $email, $hashedPassword);
    
        if (!$result) {
            return false; // Database insertion failed
        }
    
        // Registration successful, return user data
        return [
            'username' => $username,
            'email' => $email
        ];
    }
}