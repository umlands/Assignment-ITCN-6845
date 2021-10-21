<?php
    require('database.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add a Comment</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
</head>
   <h1>New Comment</h1>
   <form action="add_comment.php" method="post"> 
        <fieldset>
            <textarea name="comment" rows="4" cols="50"></textarea>   
        </fieldset>
        <input type="submit" value="Submit Comment">
        <br>
    </form>    
</body>
</html>