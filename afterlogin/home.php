<?php
session_start();
include('basicpage.php');
printf('welcome'.' '.$_SESSION['un']);

exit;
?>
