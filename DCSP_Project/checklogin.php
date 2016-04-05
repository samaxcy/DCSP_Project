<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Project #</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php
    require('connect.php');

error_reporting(0); 

$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);
$passHash = md5($password);

$query = "SELECT * FROM user WHERE  email='$email' AND password='$passHash'" ;

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

if($row)
{
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $id;
	$_SESSION['loginMessage'] = true;

	//header("Location: index.php");
	echo "<script type=\"text/javascript\"> window.location.href = 'index.php'; </script>";
}
else
{
	echo "<h1 style='text-align: center;'>Login failed!</h1>";
	echo "<p style='display: block; text-align: center;'>Incorrect username or password </p>";
	echo "<br/>";
	echo "<p style='text-align: center;'><a href='login.php'>Please try again</a></p>";
}

mysqli_close($mysqli);

?>

</body>
</html>
