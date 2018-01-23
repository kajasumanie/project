<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edudept";


$con = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

$result = mysqli_query($con,"SELECT * FROM sch");

while($row = mysqli_fetch_array($result)) {
$data[$row['marks2']] = $row['marks1'];
$data1[$row['marks1']] = $row['marks1'];
//$datay[] = $row['marks2'];
}

mysqli_close($con);
?>