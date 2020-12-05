<?php
if(!session_id())
{
    session_start();
}
?>

<div id='cssmenu'>
  <ul>
     <li><a href='/'>Home</a></li>
     <li><a href='/guestlist.php'>Guest List</a></li>
     <li><a href='/info.php'>Info</a></li>
     <li><a href='/contact.php'>Contact</a></li>
     <?php
     if($_SESSION['Username'] === 'admin'){
       echo "<li><a href='/logout.php'>Logout</a></li>";
     }
     else{
       echo "<li><a href='/login.php'>Login</a></li>";
     }
     ?>
  </ul>
</div>
