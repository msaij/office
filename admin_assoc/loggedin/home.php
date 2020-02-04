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
  </head>
  <body>
    <div class="sorting">
      
    </div>
    <div class="listoforders">
      <h5>Your orders</h5>
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
           <?php  $yu=orders()?>
        </table>
    </div>
  </body>
</html>
