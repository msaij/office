<?php
require_once 'loggedbasepage.php';
require_once 'homeparts/reports.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="homeparts/jcss_logged/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="homeparts/jcss_logged/home.js" charset="utf-8"></script>
  </head>

  <body>

<!--left side -------------------------------->
    <div class="whole-left">
      <div class="orders-ul-links">
      <!-- Orders list -->
        <ul style="list-style-type:none;" id="orders-ul">
          <li><a href="#" class="orderslist">Orders</a></li>
            <ul style='list-style-type:none;' class='monthslist'>
              <?php ulmonthname();?>
            </ul>
        </ul>
      </div>
      <!-- Orders ends -->

      <!-- Years list -->
      <div class="years-ul-links">
        <ul style="list-style-type:none;" id="years-ul">
          <li><a href="#" class="years">Years</a></li>
          <ul style='list-style-type:none;' class='yearslist'>
            <?php ulyearnumbers();?>
          </ul>
        </ul>
      </div>
      <!-- Years list end -->

    </div>

<!--right side ------------------------------->
    <div class="whole-right">
      <!-- Orders -->
      <div class="orders-ul-display">

        <!--Every month items and total number of products ordered -->
        <div id="every-monthsorders-display">
          <table>
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

        <div id="each-monthitems-display">
          <table> <!-- display tables for each month in 'ORDER' -->
            <tbody>
              <tr>
              <th>Name</th>
              <th>Category</th>
              <th>Brand</th>
              <th>CReq</th>
              <th>PReq</th>
              </tr>
              <tr class="nom">

              </tr>
            </tbody>
          </table>

        </div>

      </div>
      <!-- Orders ends -->

      <!-- Years -->
      <div class="years-ul-display">






      </div>
      <!-- Years ends -->

    </div>

  </body>
</html>
