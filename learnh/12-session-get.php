<?php

// varify user login
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'] = "abhi";
    echo "<br>";
    echo "category ".$_SESSION['favCat'] = "Books";
    echo "<br>";
    echo "saved your session";
    echo "<br>";
}else{
    echo "please login";
}


?>

