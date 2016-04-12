<?php

	$dbusername = "root";
	$dbpassword = "";
	$dbname = "bulldogbytesdb";
	$dbhostname = "localhost";

$mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);
$_SESSION['mysqli'] = $mysqli;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>