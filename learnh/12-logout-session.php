<?php

// varify user login
session_start();

session_unset();
session_destroy();
echo "logged out";



?>