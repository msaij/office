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
        "<td class='name'>". $row["name"]."</td>".
        "<td class='cate'>". $row["category"]. "</td>".
        "<td class='bran'>". $row["brand"]. "</td>".
        "<td class='pric'>". $row["price_per_unit"]. "</td>".
        "<td class='cqty'>". $row["qty_in_case"]."</td>".
        "<td contenteditable='true' class='creq'>"."</td>".
        "<td contenteditable='true' class='preq'>"."</td>".
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
  $("#check").click(function(){
    $("#allitems").find('.creq','.preq').each(function(){
      if($(this).val!=''){
        var currentrow=$(this).closest("tr");
        var name=currentrow.find("td:eq(0)").text();
        var cate=currentrow.find("td:eq(1)").text();
        var bran=currentrow.find("td:eq(2)").text();
        var pric=currentrow.find("td:eq(3)").text();
        var cqty=currentrow.find("td:eq(4)").text();
        var creq=currentrow.find("td:eq(5)").text();
        var preq=currentrow.find("td:eq(6)").text();
        // checking if the creq and preq filled with values or not.
        if(creq|preq!=0){
          $(this).parents("tr").css("color","blue");
          $.ajax({
            url:"order.php",
            method:"POST",
            data:{name:'name', cate:cate, bran:bran, pric:pric, cqty:cqty, creq:creq, preq:preq},
            success:function(data)
            {
                console.log(data);
            }
          });
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
#require 'db.php';
#  if(isset($_POST["name"])){
#    $un=$_SESSION["un"];
#    $name=$_POST["name"];
#    $cate=$_POST["cate"];
#    $bran=$_POST["bran"];
#    $pric=$_POST["pric"];
#    $cqty=$_POST["cqty"];
#    $creq=$_POST["creq"];
#    $preq=$_POST["preq"];
#    $q='';
#    for($count=0;$count<count($name);$count++){
#      $un_clean=mysqli_real_escape_string($conn,$un[$count]);
#      $name_clean=mysqli_real_escape_string($conn,$name[$count]);
#      $cate_clean=mysqli_real_escape_string($conn,$cate[$count]);
#      $bran_clean=mysqli_real_escape_string($conn,$bran[$count]);
#      $pric_clean=mysqli_real_escape_string($conn,$pric[$count]);
#      $cqty_clean=mysqli_real_escape_string($conn,$cqty[$count]);
#      $creq_clean=mysqli_real_escape_string($conn,$creq[$count]);
#      $preq_clean=mysqli_real_escape_string($conn,$preq[$count]);
#
#      if($creq !='' | $preq!=''){
#        $q="INSERT into carts(username,name,category,brand,price_per_unit,qty_in_case,case_req,pieces_req)
#            values('$un_clean','$name_clean','$cate_clean','$bran_clean',$pric_clean,$cqty_clean,$creq_clean,$preq_clean)";
#      }
#    }
#    if($q!=''){
#      if(mysqli_multi_query($conn,$q)){
#        echo "Thank you";
#      }
#      else{
#        echo "Because of some error, you might have to try again..";
#      }
#    }
#    else {
#      echo "Fill the required fields.";
#    }
#
#  }
#mysqli_close($conn);
?>
