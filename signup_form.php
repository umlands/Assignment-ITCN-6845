<?php
    require('database.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
</head>
   <h1>Sign Up</h1>
   <form action="signup.php" method="post"> 
        <label>UserID:</label>
        <input type="text" name="userid" value="">
        <br>
        <label>Password:</label>
        <input type="password" name="password" value="">
        <input type="submit" value="Sign Up">
        <br>
   </form>    
</body>
</html>