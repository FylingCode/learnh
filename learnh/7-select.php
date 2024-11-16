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
$sql = "SELECT * FROM contactus WHERE name = 'Abhishek' ";

$result = mysqli_query($conn,$sql);

echo "<br>";
$num = mysqli_num_rows($result);
echo $num . " rows";


if($result){
    echo "<br>";
    echo "selected suceesfully";
    echo "<br>";

}else{
    echo "error in selecting " . mysqli_error($conn);
}

// rows
if($num > 0){
    // always give next associate

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
   // echo "<br>";

     // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
   // echo "<br>";

     // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
   // echo "<br>";


   // instaed do this
    while($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row);
       echo $row['sno'] . " : MY name is " . $row['name'] . " MY email is " .$row['email'] . " description is " . $row['concern'] ;
        echo "<br>";
    }

}

?>