<?php
#getting the months in which it consists orders
function ulmonthname(){
  require_once 'db.php';
  $monthunorderlist="SELECT DISTINCT monthname(deliverydate) as monthname FROM cart;";
  $re=mysqli_query($conn,$monthunorderlist);
  if(mysqli_num_rows($re)>0){
    while ($row=mysqli_fetch_assoc($re)) {
      $mn=$row["monthname"];
      echo "<li>"."<a href='#' class='$mn,mn'>".$mn."</a>"."</li>";
    }
  }
  else {
    echo "None yet";
  }
  return;
  mysqli_close($conn);
}


#every month items to get total number of items
function everymonthsitems()
{
require 'db.php';
$sql = "SELECT name,category,brand,creq,preq FROM cart";
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
      "<td>". $row["creq"]. "</td>".
      "<td>". $row["preq"]."</td>".
      "</tr>";
    }
}
else
{
    echo "0 results";
}
    return;
    mysqli_close($conn);
}

#each month items and quantity
function eachmonthitems()
{
  if(isset($nom)){
    echo $nom;
  }
  else {
    $nom='april';
  }
require 'db.php';
$eachmonth = "SELECT name,category,brand,creq,preq FROM cart where monthname(deliverydate)='$nom';";
$result = mysqli_query($conn, $eachmonth);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>".
      "<td>". $row["name"]."</td>".
      "<td>". $row["category"]. "</td>".
      "<td>". $row["brand"]. "</td>".
      "<td>". $row["creq"]. "</td>".
      "<td>". $row["preq"]."</td>".
      "</tr>";
    }
}
else
{
    echo "0 results";
}
    return;
    mysqli_close($conn);
}











?>
