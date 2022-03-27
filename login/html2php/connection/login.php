<?php
  if($_POST['username'] == "admin")
  {
    header("Location: ../checker.php");
  }
  else
  {
    $_SESSION["Error"] = "may Mali";
    header("Location: ../index.php");
  }
?>