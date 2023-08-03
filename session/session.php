<?php
session_start(); 
$session_uid = '';

if (!empty($_SESSION['uid'])) {
    $session_uid = $_SESSION['uid'];
    include('users.php');
}

if (empty($session_uid)) {
    $root_directory = $_SERVER['DOCUMENT_ROOT'] . '/PHP_PROJECT';
    $url = "$root_directory/login.php";
    header("Location: $url");
    exit; 
}
?>
