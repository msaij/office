<?php
session_start();
  //code to verify login credentials
  require 'db.php';
  $un=mysqli_real_escape_string($conn,$_POST['username']);
  $pa=mysqli_real_escape_string($conn,$_POST['pwd']);

  constant($sql="SELECT username,password from admin_assoc_signup WHERE username='$un' and password='$pa';");

  if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
  {
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $_SESSION["un"]=$_POST["username"];
    header("location: loggedin/home.php");
  }
  else
  {
    header("location: login.php");
  }
mysqli_close($conn);
exit;
?>
