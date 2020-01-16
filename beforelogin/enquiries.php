<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    
    <style>
        #enqform
        {
            margin:10px 0 0 10px;
        }
    </style>
    
<body>
    <?php
        include 'base_beforelogin.php';
    ?>
    
    <div>Contact Us:</div>
    
    <div id="enqform">
    <form class="enq-form" action="enq.php" method="post">
        
  <div class="name">
      <label for="name">Name:</label><br>
      <input type="text" name="name" required></div>
        
  <div class="phone">
      <label for="phone">Phone number:</label><br>
      <input type="tel" name="phone" pattern="[6-9]{1}[0-9]{9}"></div>
        
   <div class="email">
       <label for="email">Email:</label><br>
      <input type="email" name="email" required></div>
                
   <div class="query">
       <label for="query">Query(if any):</label><br>
      <textarea cols="50" rows="8"></textarea></div>
        
   <div class="submit"><br>
      <input type="submit" value="submit form"></div>
    </form>
    </div>    
</body>
</html>