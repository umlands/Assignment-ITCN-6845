<?php
// Get user data
$userid = filter_input(INPUT_POST, 'userid');
$passwordU = filter_input(INPUT_POST, 'password');

// Validate inputs
if ($userid == null or $passwordU == null)
{
    $error = "Invalid data. Try again.";
    include('signup_error.php');
} else 
{
    require_once('database.php');

    // Add user to the database  
    $query = 'INSERT INTO users
                 (Userid, Password)
              VALUES
                 (:Userid, :Password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':Userid', $userid);
    $statement->bindValue(':Password', $passwordU);
    $statement->execute();
    $statement->closeCursor();

    // Display the Sign In page
    include('signin_form.php');
}
?><?php