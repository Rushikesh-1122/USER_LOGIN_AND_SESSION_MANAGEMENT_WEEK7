<?php
include "db.php";
$user=$_POST['user'];
$pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);
mysqli_query($conn,"INSERT INTO users VALUES('','$user','$pass')");
header("location:index.html");
?>
