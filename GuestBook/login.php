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
  <div class='border2'>
    <form class='form' action="http://localhost:4000/signin.php", method="post">
      <div class="row">
        <label class="label" for="username"> Username: </label>
        <input class="input" type="text" id="username" name="username"><br>
      </div>
      <div class="row">
        <label class="label" for="password"> Password: </label>
        <input class="input" type="password" id="password" name="password"><br>
      </div>
      <input class="button" type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>
</body>
</html>
