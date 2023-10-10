-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS camagru_database;

-- Use the created database
USE camagru_database;

-- Create a table for users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Insert some sample user data
--INSERT INTO users (username, password, email) VALUES
--    ('user1', 'password1', 'user1@example.com'),
--    ('user2', 'password2', 'user2@example.com');