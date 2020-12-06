<?php
require('../GuestBook_Database/sql_connect.php');

$id = $_GET['id'];

$query = "DELETE FROM entry WHERE entry_id=$id";

$response = @mysqli_query($dbc, $query);


if($response){
  mysqli_close($dbc);
  header("Location: guestlist.php", TRUE, 301);
  exit();
}
else{
  $error = mysqli_error($dbc);
  mysqli_close($dbc);
  header("Location: guestlist.php?error=delete_failed", TRUE, 301);
  exit();
}
 ?>
