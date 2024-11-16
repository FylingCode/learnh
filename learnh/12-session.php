<?php

// varify user login
session_start();

$_SESSION['username'] = "abhi";
$_SESSION['favCat'] = "Books";

echo "saved your session logged in";

?>