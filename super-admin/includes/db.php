<?php

  $db = mysqli_connect("localhost", "root", "12345", "ss-platform");
  if (!$db) {
    die("Database connection failed.".mysqli_error($db));
  }
  else {
    // echo "Database connection established";
  }

?>
