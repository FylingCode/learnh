<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Error In Connection : " . mysqli_connect_error());
}else{
    echo "Success fully connect";
}

// $sql = "DELETE FROM contactus WHERE sno = 10";
$sql = "DELETE FROM contactus WHERE name = 'Sonam' LIMIT 3 " ;


$result = mysqli_query($conn, $sql) ;

echo "<br>";
$aff = mysqli_affected_rows($conn);
echo $aff;

if($result){
    echo "<br>";
    echo "Deletd Succesfully";
}else{
    echo "Error in deleting " . mysqli_error($conn);
}

?>