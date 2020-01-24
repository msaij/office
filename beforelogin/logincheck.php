<?php
session_start();
  //code to verify login credentials
  require 'db_config.php';
  $un=mysqli_real_escape_string($conn,$_POST['username']);
  $pa=mysqli_real_escape_string($conn,$_POST['pwd']);

  $sql="select username,pass from signup where username='$un' and pass='$pa';";

  if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
  {
    $sqlfortable="select cid,loc_id from signup where username='$un';";

    if(mysqli_num_rows(mysqli_query($conn,$sqlfortable))==1)
    {
      echo "hello";
      $_SESSION['cid']=$_REQUEST['cid'];
      $_SESSION['locid']=$_REQUEST['loc_id'];
    }
    $_SESSION['un']=$_REQUEST['username'];
    header("location: ../afterlogin/home.php");
  }
  else
  {
    header("location: login_page.php");
  }

mysqli_close($conn);
?>
