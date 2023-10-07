<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Basic input validation (you should enhance this)
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // In a real application, you would typically:
        // 1. Validate email format.
        // 2. Hash the password securely.
        // 3. Store the user data in a database.

        // For demonstration purposes, we'll just display the input.
        echo "User registered successfully.<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
} else {
    // If the form was not submitted via POST, redirect or display an error.
    echo "Access denied.";
}
?>
