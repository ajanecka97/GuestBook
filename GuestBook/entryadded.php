<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="css/styles.css">
   <title>Add Entry</title>
</head>
<body>
  <?php
  include 'includes/menu.php';
  ?>

  <div class='content'>

  <?php

  if(isset($_POST['submit'])){

    $data_missing = array();

    if(empty($_POST['firstname'])){
      $data_missing[] = 'First Name';
    }
    else{
      $firstname = trim($_POST['firstname']);
    }
    if(empty($_POST['lastname'])){
      $data_missing[] = 'Last Name';
    }
    else{
      $lastname = trim($_POST['lastname']);
    }
    if(empty($_POST['email'])){
      $data_missing[] = 'Email';
    }
    else{
      $email = trim($_POST['email']);
    }
    if(empty($_POST['message'])){
      $message = '';
    }
    else{
      $message = trim($_POST['message']);
    }

    if(empty($data_missing)){
      require_once('../GuestBook_Database/sql_connect.php');

      $query = "INSERT INTO entry(first_name, last_name,
                email, message, entry_id)
                VALUES (?, ?, ?, ?, NULL)";

      $statement = mysqli_prepare($dbc, $query);

      mysqli_stmt_bind_param($statement, "ssss", $firstname,
                              $lastname, $email, $message);

      mysqli_stmt_execute($statement);

      $affected_rows = mysqli_stmt_affected_rows($statement);

      if($affected_rows == 1){
        header("Location: http://localhost:4000/guestlist.php", TRUE, 301);
        exit();
      }
      else{
        header("Location: http://localhost:4000?error=insertion_failed", TRUE, 301);
        exit();
      }

      mysqli_stmt_close($statement);
      mysqli_close($dbc);
    }
     else{
       header("Location: http://localhost:4000?error=empty_fields", TRUE, 301);
       exit();
    }


  }

  ?>
</div>
</body>
</html>
