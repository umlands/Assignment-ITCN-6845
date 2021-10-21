<?php
// Get comment data
$time = date('Y-m-d \a\t H:i:s:');
$comment = filter_input(INPUT_POST, 'comment');

// Validate inputs
if ($comment == null)
{
    $error = "No comment. Try again.";
    include('error.php');
} else 
{
    require_once('database.php');

    // Add comment to the database  
    $query = 'INSERT INTO comments
                 (Time, Comment)
              VALUES
                 (:Time, :Comment)';
    $statement = $db->prepare($query);
    $statement->bindValue(':Time', $time);
    $statement->bindValue(':Comment', $comment);
    $statement->execute();
    $statement->closeCursor();

    // Display the Comments page
    include('comments.php');
}
?><?php

