<?php
session_start();
include('basicpage.php');
print_r('welcome'.' '.$_SESSION['un']);
exit;

?>
