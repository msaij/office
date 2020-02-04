<?php
session_start();
# A function for displaying items of a user from the database -- linked to home.php

function orders()
{
require 'db.php';
$un=$_SESSION["un"];
$sql = "SELECT * FROM cart";
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
        "<td class='creq'>". $row["creq"]."</td>".
        "<td class='preq'>". $row["preq"]."</td>".
        "<td class='dt'>". $row["deliverydate"]."</td>".
        "</tr>";
        }
}
else
{
    echo "No one has ordered yet..!!";
}
    mysqli_close($conn);
}
# -------   table() function ends here
?>
