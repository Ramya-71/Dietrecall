<?php
// phpinfo() ;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Create users table if it does not exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    name VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL PRIMARY KEY,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE)
{
    // Get form data
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // $name = "sa";
    // $username = "pa";
    // $email = "a@gmail.com";
    // $password = "123";

    // Insert data into users table
    $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE)
    {
        echo "added successfully";
        // Redirect to thankyou page
        header("Location: index.php");
    } else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
else
{
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
