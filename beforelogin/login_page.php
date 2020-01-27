<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <link rel="stylesheet" type="text/css" href="jcss_forbefore/loginform.css">
    <?php
    include 'base_beforelogin.php';
    ?>
    <style>
    ::placeholder{ font-size: 12px; opacity:0.5; }
    </style>
<body>

    <div class="loginform">
        <form id="login" action="logincheck.php" method="POST" enctype="application/x-www-form-urlencoded">
        Username:
        <input type="text" name="username" placeholder="username" required>
        Password:
        <input type="password" name="pwd" required><br>
        <button type="submit" name="submitlogin">Login</button>
        </form>
    </div>
</body>
</html>
