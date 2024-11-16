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

// insert data
$sql = "INSERT INTO users (name, role) 
VALUES ('Mamu', 'client');";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "inserted  successfully";
} else {
    echo "Error inserting into database: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);


?>