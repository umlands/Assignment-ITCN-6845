<?php
// Get user data
$userid = filter_input(INPUT_POST, 'userid');
$passwordU = filter_input(INPUT_POST, 'password');

require('database.php');

// Get user.
$queryUsers = 'SELECT Password FROM users
               WHERE userid = :Userid';
$statement = $db->prepare($queryUsers);
$statement->bindValue(':Userid', $userid);
$statement->execute();
$row = $statement->fetch();
$statement->closeCursor();
if($row['Password'] == $passwordU) {
    $_SESSION['is_valid_user'] = 1;
    require('home.php');
}
 else {
    print "You are not signed in.";
    require('signin_form.php');
}
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

</main>
</body>
</html>