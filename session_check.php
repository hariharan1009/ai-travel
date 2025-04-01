<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: signin.php"); // Redirect to sign-in page
    exit();
}
?>
