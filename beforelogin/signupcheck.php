<?php

function signupform()
{
  include 'db_config.php';
  $fn=mysqli_real_escape_string();
  $ln=mysqli_real_escape_string();
  $pn=mysqli_real_escape_string();
  $mail=mysqli_real_escape_string();
  $pass=mysqli_real_escape_string();
  $passrep=mysqli_real_escape_string();
}

?>
