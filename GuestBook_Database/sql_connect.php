<?php

DEFINE('DB_USER', 'GuestBook');
DEFINE('DB_PASSWORD', 'GUEST_B00K');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'guestbook');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not estabilish connection with the database '
. mysqli_connect_errot());

?>
