<?php

session_start();
include_once 'config.php';
$user_id = $_SESSION['user_id'];
if (isset($_POST['resetpassword'])) {
    $pass = $_POST['password'];

    $query = " UPDATE `userregistration` SET `user_password`='$pass' WHERE `user_id` = $user_id";

    if (mysqli_query($conn, $query)) {
        header("Location:passwordchanged.php");
    } else {
        echo "Eror";
    }
}
