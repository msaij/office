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
        "<td class='creq'><input type='number' name='creq' min='0'></td>".
        "<td class='preq'><input type='number' name='preq' min='0'></td>".
        "</tr>";
        }
}
else
{
    echo "Sorry for the inconvenience.!!";
}
    mysqli_close($conn);
}
# -------       table() function ends here  ----------------------
?>

<!-- to get the information from the table and submit into the sql using php  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#check").click(function(){
    $("#allitems").find('input[name=creq]','input[name=preq]').each(function(){
      if($(this).val!=''){
        var currentrow=$(this).closest("tr");
        name=currentrow.find("td:eq(0)").text();
        cate=currentrow.find("td:eq(1)").text();
        bran=currentrow.find("td:eq(2)").text();
        pric=currentrow.find("td:eq(3)").text();
        cqty=currentrow.find("td:eq(4)").text();
        creq=currentrow.find("input[name=creq]").val();
        preq=currentrow.find("input[name=preq]").val();
        // checking if the creq and preq filled with values or not & sending that td to the db
        if(creq|preq!=0){
          $(this).parents("tr").css("color","orange");
          $.ajax({
            url:"order.php",
            method:"POST",
            data:{name:name, cate:cate, bran:bran, pric:pric, cqty:cqty, creq:creq, preq:preq},
            success:function(data)
            {
                location.href="/afterlogin/home.php";
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
