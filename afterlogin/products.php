<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<script src="jcss_forafter/products.js"></script>
<link rel="stylesheet" type="text/css" href="jcss_forafter/products.css"/>

<body>
    <?php
    require 'basepage.php';
    require 'tables.php';?>

<!-- search in table -->
    <div class="search">
        <form id="searchform">
            <input type="text" name="byname" id="byname" placeholder="Product name.." onkeyup="searchbyname()"/>
        </form>
    </div>

<!-- the table -->
    <div class="table">
        <table id="allitems">
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Case quantity</th>
                <th>Case</th>
                <th>Pieces</th>
                <th>Your pick</th>

            </tr>
           <?php $displaytable=products_table(); ?>
        </table>
        <button type="submit" form="allitems" class="check">CheckOut</button>
    </div>
<!--       table div ends      -->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
  $(".check").click(function(){
    $("#allitems").find('input[name="pick"]').each(function(){
      if($(this).is(":checked")){
        $(this).parents("tr").css("color","blue");
        var currentrow=$(this).closest("tr");
        var name=currentrow.find("td:eq(0)").text();
        var cate=currentrow.find("td:eq(1)").text();
        var bran=currentrow.find("td:eq(2)").text();
        var pric=currentrow.find("td:eq(3)").text();
        var cqty=currentrow.find("td:eq(4)").text();
        var creq=currentrow.find("input[name='creq']").val();
        var preq=currentrow.find("input[name='preq']").val();
        if(creq|preq!=0){
          alert(name+"\n"+cate+"\n"+bran+"\n"+pric+"\n"+cqty+"\n"+creq+"\n"+preq);
        }
        else {
          $(this).parents("tr").css("color","red");
          alert("Give the number for case quantity or Pieces");
        }
      }
      else{
        $(this).parents("tr").css("color","black");
      }
    });
  });
});
</script>


</body>
</html>
