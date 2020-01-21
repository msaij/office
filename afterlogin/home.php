<?php
session_start();
include('basicpage.php');
print_r($_SESSION['email']);
exit;

?>
