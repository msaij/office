<?php
session_start();

# A function for displaying items of a user from the database -- linked to products.php
function products_table()
{
require 'db.php';
$cid=$_SESSION['cid'];
$loc_id=$_SESSION['loc_id'];
$sql = "SELECT * from items WHERE id IN (
        SELECT item_id from company_items WHERE company_indexid=(
        SELECT id from company_addr WHERE (cid,loc_id)=(
        SELECT cid,loc_id from signup WHERE cid='$cid' and loc_id=$loc_id)))";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
        {
        echo "<tr>".
        "<td>". $row["name"]."</td>".
        "<td>". $row["category"]. "</td>".
        "<td>". $row["brand"]. "</td>".
        "<td>". $row["price_per_unit"]. "</td>".
        "<td>". $row["qty_in_case"]."</td>".
        "<td>".'<input type="number" name="creq" style="width:50%" min=0>'."</td>".
        "<td>".'<input type="number" name="preq" style="width:50%" min=0>'."</td>".
        #"<td>".'<input type="checkbox" name="pick" value="item">'."</td>".
        "</tr>";
        }
}
else
{
    echo "Sorry for the inconvenience.!!";
}
    return;
    mysqli_close($conn);
}
# -------       table() function ends here  ----------------------
?>


<!-- to get the information from the table and submit into the sql using php  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".check").click(function(){
    $("#allitems").find('input[name="creq"]','input[name="preq"]').each(function(){
      if($(this).val!=''){
        var currentrow=$(this).closest("tr");
        var name=currentrow.find("td:eq(0)").text();
        var cate=currentrow.find("td:eq(1)").text();
        var bran=currentrow.find("td:eq(2)").text();
        var pric=currentrow.find("td:eq(3)").text();
        var cqty=currentrow.find("td:eq(4)").text();
        var creq=currentrow.find("input[name='creq']").val();
        var preq=currentrow.find("input[name='preq']").val();
        // checking if the creq and preq filled with values or not.
        if(creq|preq!=0){
          $(this).parents("tr").css("color","blue");
          document.cookie="name="+name;
          document.cookie="cate="+cate;
          document.cookie="bran="+bran;
          document.cookie="pric="+pric;
          document.cookie="cqty="+cqty;
          document.cookie="creq="+creq;
          document.cookie="preq="+preq;
          /*window.location="/afterlogin/home.php";*/
          location.reload();
        }
        else{
          $(this).parents("tr").css("color","black");
        }
      }
    });
  });
});
</script>
<!-- table check and the php(sql) ends here  -->

<?php

if($_COOKIE!=""){
  function cooker(){
    $a=$_COOKIE['name'];
    $b=$_COOKIE['cate'];
    $c=$_COOKIE['bran'];
    $d=$_COOKIE['pric'];
    $e=$_COOKIE['cqty'];
    $f=$_COOKIE['creq'];
    $g=$_COOKIE['preq'];
    $un=$_SESSION['un'];
    require 'db.php';
    $cookit ="INSERT into carts(username,name,category,brand,price_per_unit,qty_in_case,case_req,pieces_req)
                values('$un','$a','$b','$c','$d','$e','$f','$g');";
    if ($conn->query($cookit) === TRUE) {
      echo "ThankYou for placing your order, Your products are highlighted(blue).";
    }
    else {
      echo "Error: " . $cookit . "<br>" . $conn->error;
    }
  }
}
else{
  echo "scam";
}
cooker();

?>
