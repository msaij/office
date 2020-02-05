<?php
require_once 'loggedbasepage.php';
require 'homeparts/reports.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <style>
      ul#itemsul{
        padding-left: 15px;
      }
      ul.monthslist{
        padding-left: 15px;
      }
    </style>
    <link rel="stylesheet" href="homeparts/jcss_logged/home.css">
    <script src="homeparts/jcss_logged/ordersort.js" charset="utf-8"></script>
  </head>
  <body>

    <!--left side-->
    <div class="whole-left">
      <!--list of items and list within a month using list -->
      <div class="itemsul-links">
        <ul style="list-style-type:none;" id="itemsul">
          <li><a href="#">All items</a></li>
          <?php ulmonthname();?>
        </ul>
      </div>

    </div>

    <!--right side-->
    <div class="whole-right">
      <div class="itemsul-display">

        <!--Every month items and total number of products ordered -->
        <div id="everymonthsitems-display">
          <table class="adding-creq">
            <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>CReq</th>
            <th>PReq</th>
            </tr>
            <?php everymonthsitems();?>
          </table>
        </div>

        <div id="eachmonthitems-display">
          <table class="addingcreq">
            <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>CReq</th>
            <th>PReq</th>
            </tr>
            <?php eachmonthitems(); exit;?>
          </table>
        </div>

      </div>
    </div>

  </body>
</html>
