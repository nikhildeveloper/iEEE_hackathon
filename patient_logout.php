<?php

session_start();
session_destroy();
unset($_SESSION['user']);
$_SESSION['message']="Logged out succesfully";
header('location: index.php');

?>