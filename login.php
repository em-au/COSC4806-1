<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>

    <h1>Login Form</h1>

    <form action="/validate.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit">
      <br><br>
    </form>

  </body>

  <footer>
    <?php
      // Check if there have been failed attempts
      // If yes, display the number
      if (isset($_SESSION['failed_attempts']) >= 1) {
        echo "Unsuccessful attempts: " . $_SESSION['failed_attempts'];
      }
    ?>
  </footer>
</html>


