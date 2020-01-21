<?php
function table()
{
require 'db_config.php';
$sql = "SELECT name,category,brand,price_per_unit,qty_in_case FROM items";
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
        "</tr>";
        }
}
else
{
    echo "0 results";
}
    return;
}



mysqli_close($conn);
?>
