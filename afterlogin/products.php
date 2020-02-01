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
                <!-- <th>Your pick</th> -->

            </tr>
           <?php $displaytable=products_table(); ?>
        </table>
        <button type="submit" id="check">CheckOut</button>
    </div>
<!--       table div ends      -->

</body>
</html>
