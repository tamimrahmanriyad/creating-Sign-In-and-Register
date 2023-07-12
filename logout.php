<?php
require 'function.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
?>


<html>
    <body>
            
            <footer>
    <p>Tamim Rahman Riyad; 2023 @ All rights reserved.</p>
  </footer>
    </body>
</html>
