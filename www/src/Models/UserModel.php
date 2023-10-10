<?php
namespace App\Models;

include_once(__DIR__.'/../Utils/render.php');


class UserModel{
    private $id;
    private $username;
    private $email;
    
    
    // Create a new user
    public static function create() {
        // Perform database insert and return a new UserModel instance
        // This part will depend on your database implementation
        // For simplicity, we'll just return a new instance here
        // return new self(null, $username, $email);
        render('/../process_registration.php');
    }

    // Read user by ID
    public static function findById($id) {
        // Query the database to find a user by ID
        // Return a UserModel instance if found, or null if not found
        // This part depends on your database implementation
        // For simplicity, we'll return null here
        return null;
    }

    // Update user information
    public function update($id) {
        // Update the database record with the current object's data
        // This part will depend on your database implementation
    }

    // Delete user
    public function delete($id) {
        // Delete the database record associated with the current object's ID
        // This part will depend on your database implementation
    }


}