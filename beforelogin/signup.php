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
    ?>
    <link rel="stylesheet" href="jcss_forbefore/signup.css">
<body>

<div class="signupform">
    <form name="signup-form" action="signupcheck.php" method="post">

    <div class="cid"><label for="compid">Company id</label>
        <input type="text" name="compid" required></div>
    <div class="lid"><label for="locid">Location id</label>
        <input type="number" min="1" name="locid" required></div>
    <div class="fn"><label for="firstname">First Name</label>
        <input type="text" name="firstname" required></div>
    <div class="ln"><label for="lastname">Last Name</label>
        <input type="text" name="lastname" required></div>
    <div class="pn"><label for="phonenumber">Phone Number</label>
        <input type="tel" name="phonenumber" pattern="[6-9]{1}[0-9]{9}" required></div>
    <div class="mail"><label for="email">Email</label>
        <input type="text" name="email" required></div>
    <div class="pd1"><label for="pwd1">Password</label>
        <input type="password" name="pwd" required></div>
    <div class="pd2"><label for="pwd2">Repeat-Password</label>
        <input type="password" name="rep-pwd" required></div>
    <div class="submitsignup">
        <button type="submit" name="submitsign">Submit</button></div>

    </form>
</div>

</body>
</html>
