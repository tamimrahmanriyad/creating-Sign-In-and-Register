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
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="loading.css">
        <style>
            body {
                text-align: center;
                font-family: Arial, sans-serif;
                background-color: windowframe;
            }

            h2 {
                margin-top: 200px;
                font-size: 50px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        
        <h2><b>Login</b></h2>
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="login">
            <label for="">Username</label>
            <input type="text" id="username" value=""> <br>
            <label for="">Password</label>
            <input type="password" id="password" value=""> <br>
            <button class="button" onclick="submitData();">Login</button>
        </form>
    </div>
</div>
<br>


<a href="register.php"><button><b>Go To Register</b></a></button>
<?php require 'script.php'; ?>  <br>


<div class="footer">
    <footer>
        <p>Tamim Rahman Riyad 2023 @ All rights reserved.
            <a href="riyadrahman7788@gmail.com">Email</a></p>
    </footer>

</div>

<link rel="stylesheet" type="text/css" href="styles.css">

</body>
</html>