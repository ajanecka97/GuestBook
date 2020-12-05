<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="css/styles.css">
   <title>Guest Book</title>
</head>
<body>

<?php

include 'includes/menu.php';

?>
<div class='content'>
  <div class='border'>
    <form class='form' action="entryadded.php", method="post">
      <div class="row">
        <label class="label" for="firstname"> First name: </label>
        <input class="input" type="text" id="firstname" name="firstname"><br>
      </div>
      <div class="row">
        <label class="label" for="lastname"> Last name: </label>
        <input class="input" type="text" id="lastname" name="lastname"><br>
      </div>
      <div class="row">
        <label class="label" for="email"> E-mail: </label>
        <input class="input" type="text" id="email" name="email"><br>
      </div>
      <div class="row">
        <label class="label" for="message"> Message: </label>
        <input class="input" type="text" id="message" name="message"><br>
      </div>
      <input class="button" type="submit" name="submit" value="Submit">
    </form>
  </div>
  <?php
  if($_GET["error"] === "empty_fields") echo 'Please fill in all the fields';
  if($_GET["error"] === "insertion_failed") echo 'Couldn\'t insert data into database';
   ?>
</div>
</body>
</html>
