<?php
	session_destroy();
   echo 'You have logged out, please wait to be returned to the login screen';
   header('Refresh: 3; URL = login.php');
?>