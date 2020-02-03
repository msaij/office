<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="jcss_forafter/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jcss_forafter/home.js" charset="utf-8"></script>
  </head>
  <body>
    <?php include('basepage.php');
          require 'home/yourorders.php';
    ?>
    <div class="userorders">
      <h5>Your orders</h5>
        <table id="userorders">
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
           <?php  $yu=yourorders()?>
        </table>
    </div>

  </body>
</html>
