<?php

if(isset($_POST['submit'])){

  $data_missing = array();

  if(empty($_POST['username'])){
    $data_missing[] = 'Username';
  }
  else{
    $username = trim($_POST['username']);
  }
  if(empty($_POST['password'])){
    $data_missing[] = 'Password';
  }
  else{
    $password = trim($_POST['password']);
  }

  if(empty($data_missing)){
    if($username === "admin" && $password === "admin"){
      $started = session_start();
      $_SESSION['Username'] = "admin";
      if($started){
        header("Location: /guestlist.php", TRUE, 301);
      }
      else{
        header("Location: /login.php?error=session_not_started", TRUE, 301);
      }
      exit();
    }
    else{
      header("Location: /login.php?error=invalid_credentials", TRUE, 301);
      exit();
    }
  }
  else{
    header("Location: /login.php?error=empty_fields", TRUE, 301);
    exit();
  }
  }


?>
