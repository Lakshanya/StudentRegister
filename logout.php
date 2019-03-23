<?php
session_start();
$_SESSION['sId'] = null;
header('location: login.php');
?>