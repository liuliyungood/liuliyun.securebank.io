<?php
include("session.php");

if($session_user!="")
{
    header('location: UserProfile.php');
}
if(isset($_GET['error']))
{
    $errormessage=$_GET['error'];
    echo "<script>alert('$errormessage');</script>";
}
?>

<html lang="en">
<head>
<title>LoginForm</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/styletest.css">
</head>
<body background="./images/stairs.jpg">

<!-- For the website layout, I used code in this website: https://www.w3schools.com/css/tryit.asp?filename=trycss_website_layout_navbar -->
    
<div class="topnav">
  <a href="#">Accounts</a>
  <a href="#">Transactions</a>
  <a href="#">E-statements</a>
  <a href="#">Transfer</a>
  <a href="#">Manage</a>
  <a href="#">Message</a>
</div>
    
    <div class="left">
  <h2>Secure Bank</h2>
    <p>  Secure bank is a safe bank aiming to bring you about the high quality service and long-term earnings.</p>
        <a href="liyunl467458.mp4" type="video/mp4">Information tab</a> 
       
</div>

    
    
<!-- password validation coding is from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_password_val -->
    
<div class="container" >
    <h2>Log in</h2>
  <form action="Login.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password</label>
    <input type="p
                 assword" id="password" name="password"  required>
    
    <input type="submit" value="Submit">
      
      <a href="CreateAccount.html" style="color:white;">New user? Create a new account</a>
  </form>
</div>
    
 <footer style="position: fixed;left: 0;bottom: 0;width: 100%;background-color: #333;color: #f2f2f2;text-align: center;">
  <p>Developed by: Liyun Liu        Student ID: 467458</p>
</footer>   
    
</body>
</html>
