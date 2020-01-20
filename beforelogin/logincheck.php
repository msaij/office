<?php
  //code to verify login credentials
  include 'db_config.php';







  if(mysqli_query($conn,$sql))
  {
    header("location: ../afterlogin/home.php");
  }
  else
  {
    #
  }

?>
