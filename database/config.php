<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "ig";

$conn = mysqli_connect($server,$username,$password,$dbname);


if (!$conn) {
    echo ("<script>console.log('Database is not connected')</script>");
}
else {
   
}

?>