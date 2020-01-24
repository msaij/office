<?php

  require 'db_config.php';
  $cid=mysqli_real_escape_string($conn,$_POST['compid']);
  $lid=mysqli_real_escape_string($conn,$_POST['locid']);
  $fn=mysqli_real_escape_string($conn,$_POST['firstname']);
  $ln=mysqli_real_escape_string($conn,$_POST['lastname']);
  $un=mysqli_real_escape_string($conn,$_POST['username']);
  $pn=mysqli_real_escape_string($conn,$_POST['phonenumber']);
  $mail=mysqli_real_escape_string($conn,$_POST['email']);
  $pass=mysqli_real_escape_string($conn,$_POST['pwd']);
  $passrep=mysqli_real_escape_string($conn,$_POST['rep-pwd']);

  $sqlcheck="select username,cid,loc_id from signup where username=$un or cid=$cid and loc_id=$lid";
  if(mysqli_num_rows($conn,$sqlcheck)==0)
  {
    $sql="insert into signup (cid,loc_id,firstname,lastname,username,phone,email,pass,passrep) values ('$cid','$lid','$fn','$ln','$un','$pn','$mail','$pass','$passrep')";
    if(mysqli_query($conn,$sql))
    {
      header ("location: login_page.php");
    }
    else
    {
       header ("location: signup.php");
    }
  }
  mysqli_close($conn);

?>
