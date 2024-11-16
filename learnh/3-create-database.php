<?php
// ways to connect
// 1. mysqli extention  {mysql imroved}
// 2. PDO

// connecting
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// SQL query to create the database
$sql = "CREATE DATABASE testfromphpfile";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);


?>