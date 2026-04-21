<?php
session_start();
if(!isset($_SESSION['user'])) header("location:index.html");
echo "Welcome ".$_SESSION['user'];
echo "<br><a href='logout.php'>Logout</a>";
?>
