<?php

  session_start();

  $valid_username = "user";
  $valid_password = "1234";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    echo "success";
  }
  else {
    if (!isset($_SESSION['failed_attempts'])) {
      $_SESSION['failed_attempts'] = 1;
    }
    else {
      $_SESSION['failed_attempts']++;
    }
    echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'];
  }
?>