<?php
session_start();
require 'db.php';
if(isset($_POST["creq"]) | isset($_POST["preq"])) {
$a=$_SESSION["un"];
$b=$_POST["name"];
$c=$_POST["cate"];
$d=$_POST["bran"];
$e=$_POST["pric"];
$f=$_POST["cqty"];
$g=$_POST["creq"];
$h=$_POST["preq"];
$i=$_POST["date"];
constant($que="insert into cart(username,name,category,brand,price_per_unit,qty_in_case,creq,preq,deliverydate) values('$a','$b','$c','$d','$e','$f','$g','$h','$i');");
mysqli_query($conn,$que);
mysqli_close($conn);
}
exit;
?>
