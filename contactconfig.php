<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['contact-form-name'];

    $email = $_POST['contact-form-email'];
    $phone_number = $_POST['contact-form-phone'];
    $message = $_POST['contact-form-message'];

    $query  = "INSERT INTO `contactus`( `user_name`, `user_email`, `user_phone`, `user_message`) VALUES ('$name','$email','$phone_number','$message')";
    if (mysqli_query($conn, $query)) {

        header("Location:contactresponse.php");
    }
    mysqli_close($conn);
}
