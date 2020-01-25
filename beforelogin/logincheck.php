<?php
session_start();
  //code to verify login credentials
  require 'db_config.php';
  $un=mysqli_real_escape_string($conn,$_POST['username']);
  $pa=mysqli_real_escape_string($conn,$_POST['pwd']);

  constant($sql="SELECT cid,loc_id,username,pass from signup WHERE username='$un' and pass='$pa';");

  if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
  {
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $_POST["cid"]=$row["cid"];
    $_POST["loc_id"]=$row["loc_id"];
    $_SESSION["cid"]=$_POST["cid"];
    $_SESSION["loc_id"]=$_POST["loc_id"];
    $_SESSION["un"]=$_POST["username"];
    header("location: ../afterlogin/home.php");
  }
  else
  {
    header("location: login_page.php");
  }


mysqli_close($conn);
?>
