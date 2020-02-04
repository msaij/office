<?php
include 'loggedbasepage.php';
require_once 'homeparts/listoforders.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="jcss_loggedin/home.css"/>
    <script src="jcss_loggedin/ordersort.js" charset="utf-8"></script>
  </head>
  <body>

<!-- sorting -->
    <div class="sorting">
      <h5 style="margin:5px">Sorting parameters-</h5>
      <div class="parameters">
        <form id="parameters">
            <input type="text" name="byname" id="p1" placeholder="Product name.." onkeyup="sortbyname()"/>
            <input type="month" name="bymonth" id="p2" onkeyup="sortbymonth()" value="2020-01"/>
        </form>
      </div>
    </div>

<!-- orders -->
    <div class="listoforders">
      <h6 style="margin:5px">Orders :</h6>
        <table id="orderslist">
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Case-quantity</th>
                <th>Case-required</th>
                <th>Pieces-required</th>
                <th>Delivery date</th>
            </tr>
           <?php  $yu=orders();?>
        </table>
    </div>

  </body>
</html>
