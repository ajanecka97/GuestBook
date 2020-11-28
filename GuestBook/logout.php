<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: http://localhost:4000/guestlist.php", TRUE, 301);
  exit();
 ?>
