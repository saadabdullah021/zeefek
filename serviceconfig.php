<?php
session_start();
include_once 'config.php';
$_POST['amount'] =  "<script>document.writeln(amount);</script>";
echo $_POST['amount'];


