<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();

require_once 'fb.php';
unset($_SESSION['access_token']);
header('location:login.php');
?>