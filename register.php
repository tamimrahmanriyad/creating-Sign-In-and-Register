<?php
require 'function.php';
if (isset($_SESSION["id"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <style>
            body {
                text-align: center;
                font-family: Arial, sans-serif;
                background-color: windowframe;
            }

            h2 {
                margin-top: 150px;
                font-size: 50px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h2><b>Register</b></h2>
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="register">
            <label for="">Name</label>
            <input type="text" id="name" value=""> <br>
            <label for="">Username</label>
            <input type="text" id="username" value=""> <br>
            <label for="">Password</label>
            <input type="password" id="password" value=""> <br>
            <button class="button" onclick="submitData();">Register</button>

        </form>
        <br>
        
        
        <a href="login.php"><button><b>Go To sign In</b></a></button>
        <?php require 'script.php'; ?>
        
        
        <div class="footer">
    <footer>
        <p>Tamim Rahman Riyad 2023 @ All rights reserved.
            <a href="riyadrahman7788@gmail.com">Email</a></p>
    </footer>

</div>
        
        <link rel="stylesheet" type="text/css" href="styles.css">


    </body>
</html>