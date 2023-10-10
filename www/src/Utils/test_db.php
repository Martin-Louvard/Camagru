<?php
$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], "camagru_database");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The docker database is great." . PHP_EOL;

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

if (!$result) {
    die('Query Error: ' . mysqli_error($link));
}

while ($row = mysqli_fetch_assoc($result)) {
    // Process each row of data
    echo "\r\n";
    echo $row['username'];
}

mysqli_close($link);
