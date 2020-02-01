<?php
session_start();
require 'db.php';
if(isset($_POST["creq"]) | isset($_POST["preq"])) {
echo $a=$_SESSION["un"];
print $b=$_POST["name"];
echo $c=$_POST["cate"];
echo $d=$_POST["bran"];
echo $e=$_POST["pric"];
echo $f=$_POST["cqty"];
echo $g=$_POST["creq"];
echo $h=$_POST["preq"];

if(isset($_POST["creq"]) | isset($_POST["preq"])) {
constant($que="insert into cart(username,name,category,brand,price_per_unit,qty_in_case,creq,preq)
        values('$a','$b','$c','$d',$e,$f,$g,$h);");
if ($conn->query($que) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $que . "<br>" . $conn->error;
}
}
mysqli_close($conn);
}
?>
