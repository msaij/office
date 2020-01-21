<?php

# configuration for db
    require 'db_config.php';
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $query = mysqli_real_escape_string($conn,$_REQUEST['query']);

    $sql= "insert into  enquiries (name,mobileno,email,inquery) values ('$name','$phone','$email','$query')";

    if(mysqli_query($conn,$sql))
    {
       header("location: home.php");
    }
    else
    {
       #header("location: enquiries.php");
    }
    mysqli_close($conn);

?>
