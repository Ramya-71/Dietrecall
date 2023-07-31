<?php
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'mydb1');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if (!$conn) {
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if (mysqli_query($conn, $sql)) {
    // Connect to the database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$conn) {
        die('ERROR: Could not connect. ' . mysqli_connect_error());
    }
} else {
    die('ERROR: Could not create database. ' . mysqli_error($conn));
}


// Create users table if it does not exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL PRIMARY KEY,
  password_hash VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE)
{

}
else
{
    echo "Error creating table: " . $conn->error;
}

?>
