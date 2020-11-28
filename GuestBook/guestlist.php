<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="css/styles.css">
   <title>Guest List</title>
</head>
<body>
<?php

include 'includes/menu.php';

?>

<div class='content'>
<?php

require_once('../GuestBook_Database/sql_connect.php');
$query = "SELECT first_name, last_name, email, message FROM entry";

$response = @mysqli_query($dbc, $query);

if($response){
  echo "<table class='table'>
          <tr class='header'>
            <td class='cell cell-non-right cell-header'> First name </td>
            <td class='cell cell-non-right cell-header'> Last name </td>
            <td class='cell cell-non-right cell-header'> Email </td>
            <td class='cell cell-header'> Message </td>
          </tr>";

  while($row = mysqli_fetch_array($response)){
    echo "<tr>
          <td class='cell cell-non-right'>$row[first_name] </td>
          <td class='cell cell-non-right'>$row[last_name] </td>
          <td class='cell cell-non-right'>$row[email] </td>
          <td class='cell'>$row[message] </td>
          </tr>";
  }
  echo "</table>";
}
else{
  echo "Could not issue database query";
}
mysqli_close($dbc);

?>
</div>

</body>
</html>
