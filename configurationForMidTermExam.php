<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$database = "HappyBookStore";

// Create connection
$conn = mysqli_connect($hostName, $userName, $password, $database);

// Check connection
if ($conn) {
    die("Connection successful! ");
}
else{
    die("Connection failed! ");
}

?>