<?php
if (isset($_SESSION['log_out'])) {
    echo "<script>alert('Logout successfully');</script>";
}
?>
<?php include("login.php"); ?>