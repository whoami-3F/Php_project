<?php
session_start();

// Set the logout session variable
$_SESSION['logout'] = true;

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <script>
    // Display an alert message
    alert("You have been successfully logged out!");

    // Redirect to the index.php page after the alert
    window.location = "/mysite/PHP_PROJECT/index.php";
    </script>
</body>
</html>
