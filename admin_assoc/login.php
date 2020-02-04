<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin-assoc login</title>
  </head>
  <!--<link rel="stylesheet" type="text/css" href="jcss_forbefore/loginform.css">-->

  <style>
  ::placeholder{ font-size: 12px; opacity:0.5; }
  .loginform form{
      display: flex;
      flex-direction: column;
      width: 200px;
      margin-left: 40%;
      margin-top: 15%;
      font-family: monospace;
      font-size: 15px;
  }
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
