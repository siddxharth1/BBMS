<?php
session_start();
$uname=$_SESSION['uname'];
session_destroy();
header('Location:home.php');
?>