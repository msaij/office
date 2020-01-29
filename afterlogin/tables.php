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
    echo "Try searching for something else..";
}
    return;
    mysqli_close($conn);
}
# -------       table() function ends here  ----------------------

?>


<!-- to get the information from the table and submit into the sql using php  -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
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
          alert(name+"\n"+cate+"\n"+bran+"\n"+pric+"\n"+cqty+"\n"+creq+"\n"+preq);
        }
        else{
          $(this).parents("tr").css("color","black");
        }
        /*else {
          $(this).parents("tr").css("color","red");
          alert("Give the number for case quantity or Pieces \n It is marked in red");
        }
        //checking is done and notified.*/
      }
      else{
        $(this).parents("tr").css("color","black");
      }
    });
  });
});
</script>
<!-- table check and the php(sql) ends here  -->
