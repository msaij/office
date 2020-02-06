// HIDE AND DISPLAY PART STARTS-------------
$(document).ready(function(){
  $(".monthslist").hide();

  $(".orderslist").click(function(){
    $(".monthslist").show();
  });
  $(".orderslist").dblclick(function(){
    $(".monthslist").hide();
  });
});
// hide or show the tables of each link
// i.e showing the table of the link which is clicked
$(document).ready(function(){
  $("#everymonthsitems-display").hide();
  $("#eachmonthitems-display").hide();

  $(".orderslist").click(function(){
    $("#everymonthsitems-display").show();
    $("#eachmonthitems-display").hide();
  });
  $(".monthslist").click(function(){
    $("#eachmonthitems-display").show();
    $("#everymonthsitems-display").hide();
  });
});
// HIDE AND DISPLAY PART ENDS HERE-------------




// $(document).ready(function(){ }) is equal to $(funciton(){ })
// ---- from here ->down
/*$(function(){
  $(".monthslist li a").click(function(){
    nameomonth=$(".monthslist li a:link:focus").text();
    $.ajax({
      url:"../loggedin/homeparts/reports.php",
      method:"POST",
      data:{nameomonth:nameomonth},
      success:function(data)
      {
        alert(data);
        console.log(data);
      }
    });
  });
});
*/
// -- till here
