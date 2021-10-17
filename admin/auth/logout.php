<?php 

session_start();

session_unset();

session_destroy();

echo 'you will be directed to login page';
	header('refresh:1;URL=login.php');

?>