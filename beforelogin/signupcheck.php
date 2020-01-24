<?php

  require 'db_config.php';
  $cid=mysqli_real_escape_string($conn,$_REQUEST['compid']);
  $lid=mysqli_real_escape_string($conn,$_REQUEST['locid']);
  $fn=mysqli_real_escape_string($conn,$_REQUEST['firstname']);
  $ln=mysqli_real_escape_string($conn,$_REQUEST['lastname']);
  $un=mysqli_real_escape_string($conn,$_REQUEST['username']);
  $pn=mysqli_real_escape_string($conn,$_REQUEST['phonenumber']);
  $mail=mysqli_real_escape_string($conn,$_REQUEST['email']);
  $pass=mysqli_real_escape_string($conn,$_REQUEST['pwd']);
  $passrep=mysqli_real_escape_string($conn,$_REQUEST['rep-pwd']);

  $sql="insert into signup (cid,loc_id,firstname,lastname,username,phone,email,pass,passrep) values ('$cid','$lid','$fn','$ln','$un','$pn','$mail','$pass','$passrep')";
  if(mysqli_query($conn,$sql))
  {
    header ("location: login_page.php");
  }
  else
  {
     header ("location: signup.php");
  }
  mysqli_close($conn);

?>
