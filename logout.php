<?php
session_start();
session_unset($_SESSION['username']);
session_destroy();
echo 'You have been logged out. <a href="index.php">Go back</a>';
?>
