<?php
    include 'login.php'; 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title> 
<link rel="stylesheet" href="css\styles.css">   
</head>    
<body>   
<div class="container"> 
    <form method="post" action="" autocomplete="off">
        <p class="heading">Login In</p>
        <div class="box">
            <p>Email</p>
            <div> <input type="email" id="email"  name="email" class="input" autocomplete="off" placeholder="Enter your email"> </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div> <input id="pass"  name = "password" type="password" class="input" autocomplete="off" placeholder="Enter your password"> </div>
            <div class="group"> <input type="submit" class="loginBtn" value="Sign in" name="login" id="login"> </div>
        <p class="text">Don't have an account? <a href="register.php">Signup</a></p>
    </form>
</div>
</body>     
</html> 