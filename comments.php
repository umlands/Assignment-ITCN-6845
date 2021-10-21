<?php
require('database.php');

// Get comments.
$queryComments = 'SELECT * FROM comments
                  ORDER BY Time';
$statement = $db->prepare($queryComments);
$statement->execute();
$allComments = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>User Comments</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Past Comments</h1></header>
<main>
    <?php foreach ($allComments as $allComment) : ?>
        <form> 
            <fieldset>
                <label>Date and Time:</label>
                <label><?php echo $allComment['Time']; ?></label>
                <br>
                <label>Comment:</label>
                <textarea name="comments" rows="4" cols="100"><?php echo $allComment['Comment']; ?></textarea>   
            </fieldset>
        </form>
        <br>
    </form> 
    <?php endforeach; ?>
    <a href="add_comment_form.php"><H1>Add Comment</H1></a>
    <a href= "home.php"><H1>Home</H1></a>
    <a href="index.php"><H1>Logout</H1></a>
</main>
</body>
</html>