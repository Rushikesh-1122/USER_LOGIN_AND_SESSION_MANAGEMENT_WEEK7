<?php
session_start();
include "db.php";
$user=$_POST['user'];
$pass=$_POST['pass'];

$q=mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
$row=mysqli_fetch_assoc($q);

if(password_verify($pass,$row['password'])){
  $_SESSION['user']=$user;
  header("location:dashboard.php");
}else{
  echo "Login Failed";
}
?>
