<?php

/* ---IT IS FOR 'ORDER' HEADER LINK--- */

#getting the months in which it consists orders
function ulmonthname(){
  require 'db.php';
  $monthunorderlist="SELECT DISTINCT monthname(deliverydate) as monthname FROM cart;";
  $re=mysqli_query($conn,$monthunorderlist);
  if(mysqli_num_rows($re)>0){
    while ($row=mysqli_fetch_assoc($re)) {
      $mn=$row["monthname"];
      echo "<li>"."<a href='#' class='mn'>".$mn."</a>"."</li>";
    }
  }
  else {
    echo "None yet";
  }
  return;
  mysqli_close($conn);
}


#every months orders.
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

#each months items orders.

if(isset($_POST['nom'])) {
  $nom=$_POST['nom'];
}

function eachmonthitems()
{
  global $nom;
  echo "$nom";
  $GLOBALS['nom'];
  require 'db.php';
  $eachmonth = "SELECT name,category,brand,creq,preq FROM cart where monthname(deliverydate)='april';";
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

/* ---TILL HERE IT IS FOR 'ORDER' HEADER LINK---- */


/* ---FOR 'ORDER' HEADER LINK---- */

function ulyearnumbers(){
  require 'db.php';
  $yearsunorderlist="SELECT DISTINCT year(deliverydate) as yearnumber FROM cart;";
  $re=mysqli_query($conn,$yearsunorderlist);
  if(mysqli_num_rows($re)>0){
    while ($row=mysqli_fetch_assoc($re)) {
      $yn=$row["yearnumber"];
      echo "<li>"."<a href='#' class='yn'>".$yn."</a>"."</li>";
    }
  }
  else {
    echo "None yet";
  }
  return;
  mysqli_close($conn);
}





/* ---TILL HERE IT IS FOR 'YEAR' HEADER LINK---- */
?>
