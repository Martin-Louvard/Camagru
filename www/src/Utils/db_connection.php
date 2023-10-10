<?php
namespace App\Utils;

class DatabaseConnection {
    private static $instance;
    private $mysqli;

    private function __construct() {
        $hostname = 'database';
        $username = 'root';
        $password = $_ENV['MYSQL_ROOT_PASSWORD'];
        $database = 'camagru_database';

        // Create a database connection
        $this->mysqli = mysqli_connect($hostname, $username, $password, $database);

        // Check if the connection was successful
        if (!$this->mysqli) {
            die('Connect Error: ' . mysqli_connect_error());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->mysqli;
    }
}
?>
