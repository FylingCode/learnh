<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("failed database connection ". mysqli_connect_error());
}else{
    echo "Connection Success full";
}

// $sql = "SELECT * FROM contactus";
$sql = "UPDATE contactus SET name = 'love' WHERE sno = 4 ";

$result = mysqli_query($conn,$sql);

echo "<br>";
$num = mysqli_affected_rows($conn);
echo $num . " rows";


if($result){
    echo "<br>";
    echo "Updated suceesfully";
    echo "<br>";

}else{
    echo "Error in updating " . mysqli_error($conn);
}


?>
