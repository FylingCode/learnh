<?php
// ways to connect
// 1. mysqli extention  {mysql imroved}
// 2. PDO

// connecting
$servername = "localhost";
$username = "root";
$password = "";

// craete connection 
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("sorry we failed " . mysqli_connect_error());
}else{
    echo "connection successfull";
}



?>