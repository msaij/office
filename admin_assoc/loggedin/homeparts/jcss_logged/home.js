// HIDE AND DISPLAY PART STARTS for(orders)-----------------------------
$(document).ready(function(){
  $(".monthslist").hide(); // hiding months (name) links

  $(".orderslist").click(function(){
    $(".monthslist").show(); //showing months (name) links
  });
  $(".orderslist").dblclick(function(){
    $(".monthslist").hide(); //hide months name links
    $("#every-monthsorders-display").hide(); //hiding every months consolidated order table
  });
});
// hide or show the tables of each link
// i.e showing the table of the link which is clicked
$(document).ready(function(){
  $("#every-monthsorders-display").hide(); //hiding every months consolidated order table
  $("#each-monthitems-display").hide(); //hiding each month order table

  $(".orderslist").click(function(){
    $("#every-monthsorders-display").show(); //show every months order table
    $("#each-monthitems-display").hide(); //hide each month ordertable
  });
  $(".monthslist").click(function(){
    $("#each-monthitems-display").show(); //show eachmonth ordertable
    $("#every-monthsorders-display").hide(); //hide everymonth ordertable
  });
});
// HIDE AND DISPLAY PART ENDS HERE for(orders)----------------------------


// $(document).ready(function(){ }) is equal to $(funciton(){ })

// from here ->down -> to identify which month link is clicked under order and send it to db to get table
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
*/  // -- till here
