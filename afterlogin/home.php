<?php
session_start();
include('basepage.php');
echo ('welcome'.' '.$_SESSION['un']);

exit;
?>
