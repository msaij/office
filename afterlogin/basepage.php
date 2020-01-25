<!DOCTYPE html>
<!-- base page of afterlogin -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>Document</title>
    <link rel="stylesheet" href="jcss_forafter/basepage.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script type="text/javascript">
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

<body>
<ul class="nav justify-content-start">
    <li class="nav-item">
        <a class="nav-link active" href="home.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="products.php">Your Products</a>
    </li>
    <li class="right">
        <a class="nav-link" href="logout.php" onclick="preventBack()">logout</a>
    </li>
</ul>

</body>
</html>
