<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: guestlist.php", TRUE, 301);
  exit();
 ?>
