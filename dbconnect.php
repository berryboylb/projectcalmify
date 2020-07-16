<?php

$servername = "us-cdbr-east-02.cleardb.com";
$username = "b7882e0919aa39";
$password = "0d909835";
$database = "heroku_0b8b343f558c684";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
