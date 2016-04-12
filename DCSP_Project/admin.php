<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
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
	require('connect.php');	

  if (isset($_SESSION['email']))
    {
      echo '<nav class="navbar navbar-default">';
        echo '<div class="container-fluid">';
          echo '<ul class="nav navbar-nav navbar-left">';
            echo '<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
            echo '<li><a href="admin.php"><span class="glyphicon glyphicon-certificate"></span> View Applicants</a></li>';
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

  $sql = "SELECT * FROM participant";
	$result = $mysqli->query($sql);

	mysqli_close($mysqli);
?>  

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
<div class="panel panel-default">
<div class="panel-heading">Applicants - Click a row to view applicant information.</div>
  <table class="table">
  <thead class="thead-inverse">
    <th>#</th>
    <th>Session</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Age</th>
    <!--<th>DOB</th>-->
    <!--<th>Race</th>-->
    <th>Grade</th>
    <th>GPA</th>
    <th>T-Shrit Size</th>
  </thead>
  <?php while ($row = $result->fetch_assoc()) { ?> 
    <?php $id = $row['participantID']; ?> 
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $row["sess"]; ?></td>
      <td><?php echo ('<a href="viewParticipant.php?id= ' . $id . '">' . $row["f_name"] . '</a>'); ?></td>
      <td><?php echo $row["l_name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["age"]; ?></td>
      <!--<td><?php echo $row["dob"]; ?></td>-->
      <!--<td><?php echo $row["race"]; ?></td>-->
      <td><?php echo $row["grade"]; ?></td>
      <td><?php echo $row["GPA"]; ?></td>
      <td><?php echo $row["tshirt"]; ?></td>
    </tr>
    <?php } ?>
  </table>
</div>
</div>
<div class="col-lg-3 col-md-3"></div>

<?php
  require 'footer.php';
?>

</body>
</html>