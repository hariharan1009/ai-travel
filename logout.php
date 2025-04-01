<?php
session_start();
session_destroy();
header("Location: signin.php"); // Redirect to sign-in page
exit();
?>
