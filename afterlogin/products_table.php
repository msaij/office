<?php
session_start();

# A function for displaying items of a user from the database -- linked to products.php
function table()
{
require 'db.php';
$cid=$_SESSION['cid'];
$loc_id=$_SESSION['loc_id'];
$sql = "SELECT * from items WHERE id IN (
        SELECT item_id from company_items WHERE company_indexid=(
        SELECT id from company_addr WHERE (cid,loc_id)=(
        SELECT cid,loc_id from signup WHERE cid='$cid' and loc_id=$loc_id)))";
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
    echo "No results";
}
    return;
    mysqli_close($conn);
}
# -------       table() function ends here  ----------------------
?>
