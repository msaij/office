<?php
  //code to verify login credentials
  include 'db_config.php';
  $em=mysqli_real_escape_string($conn,$_REQUEST['email']);
  $pa=mysqli_real_escape_string($conn,$_REQUEST['pwd']);

  $sql="select email,pass from signup where email='$em' and pass='$pa'";


  if(mysqli_num_rows(mysqli_query($conn,$sql))==1)
  {
    header("location: ../afterlogin/home.php");
  }
  else
  {
    header("location: login_page.php");
  }

?>
