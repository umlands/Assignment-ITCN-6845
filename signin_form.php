<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
</head>
   <h1>Sign In/Sign Up</h1>
   <form action="signin.php" method="post"> 
        <label>UserID:</label>
        <input type="text" name="userid" value="">
        <br>
        <label>Password:</label>
        <input type="password" name="password" value="">
        <input type="submit" value="Sign In">
        <br>
   </form>  
   <br>
   <form action="signup_form.php" method="post"> 
        <label>New?:</label>
        <input type="submit" value="Sign Up">
   </form>    
</body>
</html>