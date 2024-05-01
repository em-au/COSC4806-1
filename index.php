<?php
session_start();

// Check if user is authenticated (use session variable authenticated)
// if yes, nothing
// If not, redirect to login.php.... use header()
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Index</title>
  </head>
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username']?></p>

    <p><a href="/login.php">Click here to login</a></p>
    
  </body>

  <footer>
    <p><a href="/logout.php" Click here to logout</p>
    
  </footer>
</html>