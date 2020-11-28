<?php
if(!session_id())
{
    session_start();
}
?>

<div id='cssmenu'>
  <ul>
     <li><a href='http://localhost:4000'>Home</a></li>
     <li><a href='http://localhost:4000/guestlist.php'>Guest List</a></li>
     <li><a href='http://localhost:4000/info.php'>Info</a></li>
     <li><a href='http://localhost:4000/contact.php'>Contact</a></li>
     <?php
     if($_SESSION['Username'] === 'admin'){
       echo "<li><a href='http://localhost:4000/logout.php'>Logout</a></li>";
     }
     else{
       echo "<li><a href='http://localhost:4000/login.php'>Login</a></li>";
     }
     ?>
  </ul>
</div>
