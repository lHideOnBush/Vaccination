<?php
  session_start();
  if ($_POST['username'] == "admin")
  {
    header("Location: ../checker.php");
  }
  else
  {
    $_SESSION['Error'] = "<h3>mali</h3>";
    header("Location: ../index.php");
  }
