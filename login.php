<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: game.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="asset/style.css">
    <!-- query -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

  </head>
  <body>

  
  <div id="form" class="main">
        <div class="forms">
            <div class="login" id="loggg" >
                <label>Login</label>

                <form action="">
                <input type="hidden" id="action" method="post" value="login">
                <input onkeyup="user()" type="text" placeholder="username" required name="username" id="username">
                <input onkeyup="pw()" type="password" class="password" placeholder="password" required nama="password" id="password">
                    <div class="input-field button">
                        <div class="input1">
                              <input type="button" value="Login" id="log" name="Login" onclick="submitData()">
                        </div>
                  
                    </div>
                </form>
                <span >or use your account <a href="#regg" id="aref">Sign Up</a>  </span>
               
            </div>



           

            <!-- Registration Form -->
            <div class="signup" id="regg">
                <label>Sign Up</label>

                <form action="">
                    <input type="hidden" id="action2" method="post" value="register">
                    <input type="text" placeholder="fullname" required name="name2" id="name2">  
                    <input type="text" placeholder="username" required name="username" id="username2">
                    <input type="password" class="password" placeholder="create a password" required name="password" id="password2">         
                   
              
                </form>
                <div class="input1">
                     <input type="button" value="Sign Up" id="Signup" name="signupp" style="margin-top: 20px;" onclick="submitDataReg()">
                </div>
               
                <span >already have an account <a href="#loggg" id="aref">Sign In</a>  </span>
             
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="dist/sweetalert2.min.js"></script>
    <script src="asset/script.js"></script>
  </body>
</html>