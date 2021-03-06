<!DOCTYPE html>
<html>

<head>
  <title>Success!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<?php
    require 'header.php';
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="application.php"><span class="glyphicon glyphicon-certificate"></span> Apply</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>


<body>
	<div class="col-lg-3 col-md-3"></div>
	<div class="col-lg-6 col-md-6">
		<h1>Congratulations! You applied successfully!</h1>
		<br/>
		<br/>
		<h3>Click <a href="index.php">here</a> to return to home!</h3>
	</div>
	<div class="col-lg-3 col-md-3"></div>
</body>

<?php
	require 'footer.php';
?>

</html>