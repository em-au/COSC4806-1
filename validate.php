<?php

  $valid_username = "user";
  $valid_password = "1234";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    echo "success";
  }
  else {
    echo "fail";
  }
?>