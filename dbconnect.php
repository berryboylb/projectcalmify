<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "berryboy";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}