<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<script src="jcss/itemslist.js"></script>
    <style>
        .search{
            margin-bottom: 20px;
        }
        #byname{
            width: 30%;
            border-width:1px;
            border-radius: 3px;
        }
        table th,td{
            width: 130px;
            text-align:left;
        }
    </style>

<body>
    <?php include 'basicpage.php'; include 'items_table.php'; ?>

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
            </tr>
           <?php $displaytable=table(); ?>
        </table>
    </div>


</body>
</html>
