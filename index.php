<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>

    </head>
    <body>



        <h1>Welcome<?php echo $user["name"]; ?></h1>
        <button><a href="logout.php"><span>Logout</a></button></span>



    <?php
    require 'function.php';
    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
    } else {
        header("Location: login.php");
    }
    ?>




</body>
</html>
