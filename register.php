<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];


    $query =  "INSERT INTO `userregistration`( `user_name`,  `user_email`, `user_password`) VALUES
    ('$name' , '$email' , '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: userlogin.php");
    }


    mysqli_close($conn);
}
