<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);
$result = mysqli_query($conn,"SELECT *from users where username='$username' AND password='$password'"); 


if (mysqli_num_rows($result)>0)
{
  $_SESSION['username']=$username;
  setcookie("id",$result->fetch_assoc()["id"]);
  header('location:dashboard.php');
}
else
{
  echo "Maaf password Anda salah";
  header('location:login.php');
}
?>