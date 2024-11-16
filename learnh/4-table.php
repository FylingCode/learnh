<?php
// ways to connect
// 1. mysqli extention  {mysql imroved}
// 2. PDO

// connecting
$servername = "localhost";
$username = "root";
$password = "";
$database = "testfromphpfile";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// create table
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    name VARCHAR(255) NOT NULL,         
    role VARCHAR(255) NOT NULL,         
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);


?>