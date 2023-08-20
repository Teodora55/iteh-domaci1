<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ketering";
$port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database,$port) or die("Database connection failed");

?>