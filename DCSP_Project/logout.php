<?php
//Start a session
if (!isset($_SESSION))
	session_start();
	
unset($_SESSION['email']);	
unset($_SESSION['id']);	

session_unset();

session_destroy();

header("Location: index.php");
?>