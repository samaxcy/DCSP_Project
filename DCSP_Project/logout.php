<?php
//Start a session
//if (!isset($_SESSION))
//	session_start();
	
//unset($_SESSION['email']);	

session_start();

$_SESSION = array();

session_unset();

session_destroy();

header("Location: index.php");

exit();
?>