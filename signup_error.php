<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Signup Error</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <header><h1>Signup</h1></header>

    <main>
        <h2 class="top">Error</h2>
        <p><?php echo $error; ?></p>
        <form action="signup.php" method="post"> 
            <label>UserID:</label>
            <input type="text" name="userid" value="">
            <br>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <input type="submit" value="Sign Up">
            <br>
       </form>    
    </main>
</body>
</html>