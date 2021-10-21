<?php
    // Start session management with a persistent cookie
    $lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
    session_set_cookie_params($lifetime, '/');
    session_start(); 
    require('database.php');
?>
<html>
<head>
    <title>Comment Corner</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
   <h1 id="Title">Welcome to Comment Corner!</h1>
   <br>
   <?php
     // If the user isn't logged in, force the user to login
     if (!$_SESSION['is_valid_user'] == 1) {
        require_once('signin_form.php');
     }
     else {
        require_once('home.php');
     }
?>
   <br>
</body>
</html>