<?php
  //code to verify login credentials
  require 'db_config.php';

  $un=mysqli_real_escape_string($conn,$_POST['username']);
  $pa=mysqli_real_escape_string($conn,$_POST['pwd']);

  $sql="select firstname,username,pass from signup where username='$un' and pass='$pa';";

  if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
  {
    session_start();
    $_SESSION['un']=$_POST['username'];
    header("location: ../afterlogin/home.php");

  }
  else
  {
    header("location: login_page.php");
  }


mysqli_close($conn);
?>
