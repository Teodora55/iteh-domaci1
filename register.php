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
            <p>Firstname</p>
            <div> <input type="text" id="firstname"  name="firstname" class="input" autocomplete="off" placeholder="Enter your firstname"> </div>
        </div>
        <div class="box">
            <p>Lastname</p>
            <div> <input type="text" id="lastname"  name="lastname" class="input" autocomplete="off" placeholder="Enter your lastname"> </div>
        </div>
        <div class="box">
            <p>Username</p>
            <div> <input type="text" id="username"  name="username" class="input" autocomplete="off" placeholder="Enter your username"> </div>
        </div>
        <div class="box">
            <p>Email</p>
            <div> <input type="email" id="email"  name="email" class="input" autocomplete="off" placeholder="Enter your email"> </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div> <input id="password"  name = "password" type="password" class="input" autocomplete="off" placeholder="Enter your password"> </div>
        </div>
        <div class="box">
            <p>Conform password</p>
            <div> <input id="password2"  name = "password2" type="password" class="input" autocomplete="off" placeholder="Enter your password"> </div>
        </div>
            <div class="group"> <input type="submit" class="loginBtn" value="Sign up" name="register" id="register"> </div>
    </form>
</div>
</body>     
</html> 