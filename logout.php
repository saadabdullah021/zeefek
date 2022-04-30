<?php
if (!$_SESSION['user_name']) {
    header("index.php");
}

if (session_start()) {
    session_destroy();
    header("Location:index.php");
}
