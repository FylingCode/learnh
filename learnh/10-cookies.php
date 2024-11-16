<?php

// setcookie("category","Books", seconds (expire in one day) , browser)
echo "Cookies";
setcookie("category","Books", time() + 86400 , "/");

?>