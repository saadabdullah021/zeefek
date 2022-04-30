<?php

include_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newsletter-form-submit'])) {

    $newletter_email = $_POST['newsletter-form-email'];
    $query = "INSERT INTO `newsletter`(`user_email`) VALUES ('$newletter_email')";
    if (mysqli_query($conn, $query)) {
        header("Location:index.php");
    }
    mysqli_close($conn);
}
