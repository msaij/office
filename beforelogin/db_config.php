<?php

$dbhost = 'localhost:3308';
$dbuser = 'root';
$dbpass = '';
$db     = 'office';
$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
if($conn -> connect_error)
{
    die("connection failed:".mysqli_connect_error());
}

?>
