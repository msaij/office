<?php
session_start();
include('basicpage.php');
print_r('welcome'.' '.$_SESSION['un']);

print_r($_SESSION['cid']);
print_r($_SESSION['locid']);

exit;

?>
