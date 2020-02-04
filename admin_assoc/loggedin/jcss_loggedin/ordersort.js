function sortbyname() {
  // search using item name
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("p1");
  filter = input.value.toUpperCase();
  table = document.getElementById("orderslist");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[0];
    if (td)
    {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1)
        {
            tr[i].style.display = "";
        }
        else
        {
            tr[i].style.display = "none";
        }
    }
  }
}

function sortbymonth() {
  // search using month and year
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("p2");
  filter = input.value.toUpperCase();
  table = document.getElementById("orderslist");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[7];
    if (td)
    {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1)
        {
            tr[i].style.display = "";
        }
        else
        {
            tr[i].style.display = "none";
        }
    }
  }
}
