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
	require 'connect.php';

	$id = $_GET['id'];

	$sql1 = "SELECT * FROM participant WHERE participantID ='$id'";
	$result1 = $mysqli->query($sql1);
	

	$sql2 = "SELECT * FROM address WHERE addressID ='$id'";
	$result2 = $mysqli->query($sql2);

	$sql3 = "SELECT * FROM parent WHERE parentID ='$id'";
	$result3 = $mysqli->query($sql3);

	$sql4 = "SELECT * FROM emergency WHERE emergencyID ='$id'";
	$result4 = $mysqli->query($sql4);

	$sql5 = "SELECT * FROM school WHERE schoolID ='$id'";
	$result5 = $mysqli->query($sql5);
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-left">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> View Applicant</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		</ul>
	</div>
</nav>

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	<fieldset>
		<legend>Applicant Information</legend>
		<div>
		<?php	while ($row = $result1->fetch_assoc()) { ?>
				<label>Session: </label> <?php echo $row["sess"] . '<br>'; ?>
				<label>Gender: </label> <?php echo $row["gender"] . '<br>'; ?>
				<label>First Name: </label> <?php echo $row["f_name"] . '<br>'; ?>
				<label>Last Name: </label> <?php echo $row["l_name"] . '<br>'; ?>
				<label>Email: </label> <?php echo $row["email"] . '<br>'; ?>
				<label>Age: </label> <?php echo $row["age"] . '<br>'; ?>
				<label>DOB: </label> <?php echo $row["dob"] . '<br>'; ?>
				<label>Race: </label> <?php echo $row["race"] . '<br>'; ?>
				<label>Grade: </label> <?php echo $row["grade"] . '<br>'; ?>
				<label>GPA: </label> <?php echo $row["GPA"] . '<br>'; ?>
				<label>T-Shirt Size: </label> <?php echo $row["tshirt"] . '<br>' . '<br>'; ?>
		<?php } ?>
		</div>
	</fieldset>
	<fieldset>
		<div>
		<?php	while ($row = $result2->fetch_assoc()) { ?>
				<label>Street Address: </label> <?php echo $row["street"] . '<br>'; ?>
				<label>City: </label> <?php echo $row["city"] . '<br>'; ?>
				<label>State: </label> <?php echo $row["state"] . '<br>'; ?>
				<label>ZIP Code: </label> <?php echo $row["zip"] . '<br>' . '<br>'; ?>
		<?php } ?>
	</fieldset>
	<fieldset>
		<div>
		<?php	while ($row = $result3->fetch_assoc()) { ?>
				<label>Parent First Name: </label> <?php echo $row["f_name"] . '<br>'; ?>
				<label>Parent Last Name: </label> <?php echo $row["l_name"] . '<br>'; ?>
				<label>Parent Email: </label> <?php echo $row["p_email"] . '<br>'; ?>
				<label>Phone: </label> <?php echo $row["phone1"] . '<br>'; ?>
				<label>Alternate Phone: </label> <?php echo $row["phone2"] . '<br>'; ?>
				<label>Parent First Name: </label> <?php echo $row["f_name2"] . '<br>'; ?>
				<label>Parent Last Name: </label> <?php echo $row["l_name2"] . '<br>'; ?>
				<label>Parent Email: </label> <?php echo $row["p_email2"] . '<br>'; ?>
				<label>Phone: </label> <?php echo $row["phone1_2"] . '<br>'; ?>
				<label>Alternate Phone: </label> <?php echo $row["phone2_2"] . '<br>' . '<br>'; ?>
		<?php } ?>
		</div>
	</fieldset>
	<fieldset>
		<?php	while ($row = $result4->fetch_assoc()) { ?>
				<label>First Name: </label> <?php echo $row["f_name"] . '<br>'; ?>
				<label>Last Name: </label> <?php echo $row["l_name"] . '<br>'; ?>
				<label>Phone: </label> <?php echo $row["phone"] . '<br>' . '<br>'; ?>
		<?php } ?>
	</fieldset>
	<fieldset>
		<?php	while ($row = $result5->fetch_assoc()) { ?>
				<label>Name: </label> <?php echo $row["school_name"] . '<br>'; ?>
				<label>City: </label> <?php echo $row["school_city"] . '<br>'; ?>
				<label>State: </label> <?php echo $row["school_state"] . '<br>'; ?>
				<label>ZIP Code: </label> <?php echo $row["school_zip"] . '<br>'  . '<br>' . '<br>' . '<br>'; ?>
		<?php } ?>
	</fieldset>
</div>
<div class="col-lg-3 col-md-3"></div>

<?php
  require 'footer.php';
?>

</body>
</html>