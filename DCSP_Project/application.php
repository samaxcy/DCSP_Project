<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="application.php"><span class="glyphicon glyphicon-certificate"></span> Apply</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>
</div>

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
    <legend><h1>Bulldog Bytes Application</h1></legend> <br /><br />
    <form action="submitApplication.php" method="post" class="form-inline"> 

        <div>
            <legend>Session</legend><br />
            <input type="radio" id="pSession" name="pSession" value="DigitalDivas1">Bulldog Bytes Digital Divas I<br />
            <input type="radio" id="pSession" name="pSession" value="DigitalDivas2">Bulldog Bytes Digital Divas II<br />
            <input type="radio" id="pSession" name="pSession" value="CyberDawgs1">Bulldog Bytes Cyber Dawgs I<br />
            <input type="radio" id="pSession" name="pSession" value="CyberDawgs2">Bulldog Bytes Cyber Dawgs II<br />
        </div>

        <br />
        <br />

        <fieldset>
              <legend>Participant Information</legend>
          <div class="label-align">
             <label for="firstname">First Name:</label>
             <input type="text" title="First Name" id="pFirstName" name="pFirstName" placeholder="First Name"/><br />
             <label for="firstname">Last Name:</label>
             <input type="text" title="Last Name" id="pLastName" name="pLastName" placeholder="Last Name"/><br />
          </div>
          
          <br>
          
          <div class="label-align">
             <label for="email">Email Address:</label>
             <input type="text" id="pEmail" name="pEmail" placeholder="Email"/><br />
          </div>

          <br>
          
          <div class="label-align">
             <label for="address">Address:</label>
             <input type="text" id="pAddress" name="pAddress" placeholder="Address"/><br />
             <label for="city">City:</label>
             <input type="text" id="pCity" name="pCity" placeholder="City"/><br />
             <label for="state">State:</label>
             <input type="text" id="pState" name="pState" placeholder="State"/><br />
             <label for="zipCode">Zip Code:</label>
             <input type="text" id="pZipCode" name="pZipCode" placeholder="ZIP"/><br />
          </div>
          
          <br>
          
          <div class="label-align">
             <label for="age">Age:</label>
             <input type="text" id="pAge" name="pAge" placeholder="Age"/><br />
             <label for="dateOfBirth">Date of Birth:</label>
             <input type="text" id="pDOB" name="pDOB" placeholder="MM/DD/YYYY"/>
          </div>
          
          <br>
          <br>

          <div>
              <label for="race">Race/Ethnicity (check all that apply):</label><br>
              <input type="checkbox" name="race" value="asian_pacific">Asian/Pacific Islander<br />
              <input type="checkbox" name="race" value="black">Black<br>
              <input type="checkbox" name="race" value="hispanic">Hispanic<br />
              <input type="checkbox" name="race" value="nativeAmerican">Native American/Eskimo/Aleut<br>
              <input type="checkbox" name="race" value="white">White<br />
              <input type="checkbox" name="race" value="other">Other<br>
          </div>
          
          <br>
          
          <div class="label-align">
              <label for="grade">Grade:</label>
              <input type="text" id="grade" name="grade" placeholder="2016-2017 School Year"/><br />
              <label for="gpa">GPA:</label>
              <input type="text" id="gpa" name="gpa" placeholder="GPA"/>
          </div>
          
          <br>
          
           <div class="label-align">
            <label for="size">T-Shirt Size:</label><br>
            <label for="size">Youth:</label>
            <input type="radio" name="size" value="youthXS">XS
            <input type="radio" name="size" value="youthS">S
            <input type="radio" name="size" value="youthM">M
            <input type="radio" name="size" value="youthL">L
            <input type="radio" name="size" value="youthXL">XL<br>
            <label for="size">Adult:</label>
            <input type="radio" name="size" value="adultS">S
            <input type="radio" name="size" value="adultM">M
            <input type="radio" name="size" value="adultL">L
            <input type="radio" name="size" value="adultXL">XL
            <input type="radio" name="size" value="adultXXL">XXL
          </div>
          </fieldset> 

          <br>
          <fieldset>
          <div class="label-align">  
            <legend>Parent/Guardian Information</legend>
            <label for="parent1Name">Parent/Guardian</label><br>
            <label for="parent1Name">First Name:</label>
            <input type="text" id="parent1firstName" placeholder="First Name"/><br>
            <label for="parent1Name">Last Name:</label>
            <input type="text" id="parent1lastName" placeholder="Last Name"/><br>
            <label for="parent1Email">Email:</label>
            <input type="text" id="parent1Email" placeholder="Email"/><br>
            <label for="parent1Phone">Phone:</label>
            <input type="text" id="parent1Phone" placeholder="Home"/><br>
            <label for="parent1AltPhone">Alternate Phone:</label>
            <input type="text" id="parent1AltPhone" placeholder="Alternate"/><br>
                
            <br>
            <br>

            <label for="parent1Name">Parent/Guardian</label><br>
            <label for="parent1Name">First Name:</label>
            <input type="text" id="parent1firstName" placeholder="First Name"/><br>
            <label for="parent1Name">Last Name:</label>
            <input type="text" id="parent1lastName" placeholder="Last Name"/><br>
            <label for="parent1Email">Email:</label>
            <input type="text" id="parent1Email" placeholder="Email"/><br>
            <label for="parent1Phone">Phone:</label>
            <input type="text" id="parent1Phone" placeholder="Home"/><br>
            <label for="parent1AltPhone">Alternate Phone:</label>
            <input type="text" id="parent1AltPhone" placeholder="Alternate"/><br>
          </div>
          </fieldset>

          <br>

          <div class="label-align">
            <fieldset>
                <legend>Emergency Contact(Other Than Parent/Guardian)</legend>
             <label for="emergencyfirstName">First Name:</label>
             <input type="text" id="emergencyfirstName" placeholder="First Name"/><br>
             <label for="emergencylastName">Last Name:</label>
             <input type="text" id="emergencylastName" placeholder="Last Name"/><br>
             <label for="emergencyPhone">Phone:</label>
             <input type="text" id="emergencyPhone" placeholder="Phone"/><br>
             
            </fieldset>
          </div>
          
          <br>
          <div class="label-align">
              <fieldset>
                  <legend>School</legend>
                  <label for="schoolName">Name:</label>
                  <input type="text" id="schoolName" placeholder="Name"/><br>
                  <label for="schoolCity">City:</label>
                  <input type="text" id="schoolCity" placeholder="City"/><br>
                  <label for="schoolState">State:</label>
                  <input type="text" id="schoolState" placeholder="State"/><br>
                  <label for="schoolZip">Zip:</label>
                  <input type="text" id="schoolZip" placeholder="ZIP"/><br>
              </fieldset>
          </div>
          <input type="submit" class="btn btn-info" name="submitApplication" value="Submit" />

          <br><br><br><br><br><br>
    </form>
</div>
<div class="col-lg-3 col-md-3"></div>

<?php
  require 'footer.php';
?>

</body>
</html>