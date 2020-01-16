<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <?php
        include 'base_beforelogin.php';
        include 'signupcheck.php';
    ?>
    <link rel="stylesheet" href="jcss_forbefore/signup.css">
<body>

<div class="signupform">
    <form name="signup-form" action="signupform()" method="post">

    <div><label for="firstname">First Name</label>
        <input type="text" name="firstname" required></div>

    <div><label for="lastname">Last Name</label>
        <input type="text" name="lastname" required></div>

    <div><label for="email">Email</label>
        <input type="text" name="email" required></div>

    <div><label for="pwd1">Password</label>
        <input type="password" name="pwd" required></div>

    <div><label for="pwd2">Repeat-Password</label>
        <input type="password" name="rep-pwd" required></div>

    <div><button type="submit" name="submitsign">Submit</button></div>

    </form>
</div>

</body>
</html>
