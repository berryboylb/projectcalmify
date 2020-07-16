<?php
session_start();
require_once "dbConnect.php";/**including the databse connection file */

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $sql = "INSERT INTO email (email) VALUES ('$email')";

        if (mysqli_query($con, $sql)) {
            $message = "<div class='alert alert-success'>
                <strong>Success!</strong> Thanks, we sure would inform you when we lunch.
            </div>";

            $_SESSION['message'] = $message;

            header("location:/");
        }else {
            $message = "<div class='alert alert-warning'>
                <strong>Sorry!</strong> an error occured, please try again.
            </div>";

            $_SESSION['message'] = $message;

            header("location:/");
        }
    }
}