/* HIDE AND DISPLAY PART STARTS HERE for(ORDERS)------------------------------- */
$(document).ready(function(){
  $(".monthslist").hide(); // hiding months (name) links

  $(".orderslist").click(function(){
    $(".years-ul-display").hide(); //hide tables of YEARS
    $(".orders-ul-display").show(); //show tables of orders
    $(".monthslist").show(); //showing months (name) links
    $(".yearslist").hide();
    //$(".whole-right").show(); // shows right side (as it is disabled when year is triggered)
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
/* HIDE AND DISPLAY PART ENDS HERE for(ORDERS)---------------------------- */


/* HIDE AND DISPLAY PART STARTS HERE for(YEARS)------------------------------- */


$(document).ready(function(){
  $(".yearslist").hide(); //hide list of years
  $(".years").click(function(){
    $(".orders-ul-display").hide(); // hide the tables of ORDERS
    $(".years-ul-display").show(); // show the tables of YEARS
    $(".yearslist").show(); //show list of years
    $(".monthslist").hide(); // hide the monthlist of ORDERS
  });
  $(".years").dblclick(function(){
    $(".yearslist").hide();
  });
});



/* HIDE AND DISPLAY PART ENDS HERE for(YEARS)---------------------------- */





// $(document).ready(function(){ }) is equal to $(funciton(){ })

// from here ->down -> to identify which month link is clicked under order and send it to db to get table
$(function(){
  $(".monthslist li a").click(function(){
    nameomonth=$(".mn:focus").text();
    $.ajax({
      url:"../loggedin/homeparts/reports.php",
      method:"POST",
      data:{nom:nameomonth},
      success:function(nom)
      {
        alert(nom);
        console.log(nom);
      }
    });
  });
});
