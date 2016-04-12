<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<?php
	require 'header.php';
?>

<?php    
  if (isset($_SESSION['email']))
    {
      echo '<nav class="navbar navbar-default">';
        echo '<div class="container-fluid">';
          echo '<ul class="nav navbar-nav navbar-left">';
            echo '<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
            echo '<li><a href="application.php"><span class="glyphicon glyphicon-certificate"></span> Apply</a></li>';
            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
          echo '</ul>';
        echo '</div>';
      echo '</nav>';
    }   

    else
    {
      echo '<nav class="navbar navbar-default">';
        echo '<div class="container-fluid">';
          echo '<ul class="nav navbar-nav navbar-left">';
            echo '<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
            echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>';
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          echo '</ul>';
        echo '</div>';
      echo '</nav>';
    }
?>  
<div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
        <legend><h1>Welcome</h1></legend> <br />
        <p>Welcome to Bulldog Bytes!  It is an educational program for young girls who have completed grades 3, 4, and 5.  They will learn computer programming using Snap! and a Finch robot. Through games, girls will learn about the importance of privacy online and the dangers they might encounter when using the Internet.  They will create a web page with internet safety hints that they can share with friends and family.  </p><br />
        <p>To apply, you must register or login using the legend near the top left of the page.</p>
        <!--<img src="Bulldog_bytes.JPG" style="width:1024px;height:500px;">-->
    </div>
    <div class="col-lg-3 col-md-3"></div>

<?php
	require 'footer.php';
?>

</body>
</html>