<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emisdb";

$limit = 5;
$adjacent = 3;

$con = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
?> 
