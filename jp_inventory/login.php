<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self' data:; object-src 'none'; frame-ancestors 'none'; base-uri 'self'; form-action 'self';");
header("X-Content-Type-Options: nosniff");
session_set_cookie_params([
    'lifetime' => 0, 
    'path' => '/', 
    'domain' => '', 
    'secure' => true, 
    'httponly' => true, 
    'samesite' => 'Strict' ]);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"> 
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>login</title>
</head>
    <body class="bg-index">
        <div class ="sign-container">

            <h1>JACKET <br> POTATO</h1>

            <br>
            <form action = "login_process.php" method = "POST">

                <div class="login-container">
 
                 <h4> Username </h4>
                 <br>
                 <input type = "text" name = "username" required placeholder = "Enter Username" class="userbox"> <br><br>

                 <h4> Password </h4>
                 <br>
                 <input type = "password" name = "password" required placeholder = "Enter Password" class="passbox"> <br><br>

                 <button type = "submit" class="loginbutton"> Login </button>

                 

                 <img src="media/potato.png" alt="jacket potato logo" class=" potatologo">
                </div>
            </form>
        </div>
    </body>
</html>

