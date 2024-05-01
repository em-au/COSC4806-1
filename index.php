<?php
  session_start();

// Check if user is authenticated (use session variable authenticated)
// If not, redirect to login.php
  if (isset($_SESSION['authenticated']) != 1) {
    header ('location: /login.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Index</title>
  </head>
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username']?></p>
    <?php
      date_default_timezone_set('America/Toronto');
      echo "The current date is " . date("l F j, o");
    ?>

  </body>

  <footer>
    <p><a href="/logout.php">Click here to logout</p>
  </footer>
</html>