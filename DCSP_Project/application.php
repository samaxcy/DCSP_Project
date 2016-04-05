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
    <form action="register.php" method="post" class="form-inline"> 

        <div>
            <legend>Session</legend><br />
            <input type="radio" name="session" value="DigitalDivas1">Bulldog Bytes Digital Divas I<br />
            <input type="radio" name="session" value="DigitalDivas2">Bulldog Bytes Digital Divas II<br />
            <input type="radio" name="session" value="CyberDawgs1">Bulldog Bytes Cyber Dawgs I<br />
            <input type="radio" name="session" value="CyberDawgs2">Bulldog Bytes Cyber Dawgs II<br />
        </div>

        <br />
        <br />

        <fieldset>
              <legend>Participant Information</legend>
          <div class="label-align">
             <label for="firstname">First Name:</label>
             <input type="text" title="First Name" id="firstname" placeholder="First Name"/><br />
             <label for="firstname">Last Name:</label>
             <input type="text" title="Last Name" id="lastname" placeholder="Last Name"/><br />
          </div>
          
          <br>
          
          <div class="label-align">
             <label for="email">Email Address:</label>
             <input class="input-align" type="text" id="email" placeholder="Email"/><br />
          </div>

          <br>
          
          <div class="label-align">
             <label for="address">Address:</label>
             <input class="input-align" type="text" id="address" placeholder="Address"/><br />
             <label for="city">City:</label>
             <input class="input-align" type="text" id="city" placeholder="City"/><br />
             <label for="state">State:</label>
             <input class="input-align" type="text" id="state" placeholder="State"/><br />
             <label for="zipCode">Zip Code:</label>
             <input class="input-align" type="text" id="zipCode" placeholder="ZIP"/><br />
          </div>
          
          <br>
          
          <div class="label-align">
             <label for="age">Age:</label>
             <input type="text" id="age" placeholder="Age"/><br />
             <label for="dateOfBirth">Date of Birth:</label>
             <input type="text" id="age" placeholder="MM/DD/YYYY"/>
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
              <input type="text" id="grade" placeholder="2016-2017 School Year"/><br />
              <label for="gpa">GPA:</label>
              <input type="text" id="gpa" placeholder="GPA"/>
          </div>
          
          <br>
          
           <div>
            <label for="size">T-Shirt Size:</label><br>
            <label for="size">Youth:</label>
            <input type="radio" name="size" value="youthXS">S
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
            <label for="parent1Name">Parent/Guardian 1 Name:</label>
            <input type="text" id="parent1Name" /><br>
            <label for="parent1Phone">Home Phone:</label>
            <input type="text" id="parent1Phone" /><br>
            <label for="parent1Email">Email:</label>
            <input type="text" id="parent1Email" /><br>
            <label for="parent1AltPhone">Alternate Phone:</label>
            <input type="text" id="parent1AltPhone" /><br>
                
            <label for="parent2Name">Parent/Guardian 2 Name:</label>
            <input type="text" id="parent2Name" /><br>
            <label for="parent2Phone">Home Phone:</label>
            <input type="text" id="parent2Phone" /><br>
            <label for="parent2Email">Email:</label>
            <input type="text" id="parent2Email" /><br>
            <label for="parent2AltPhone">Alternate Phone:</label>
            <input type="text" id="parent2AltPhone" /><br>
          </div>
          </fieldset>

          <br>

          <div class="label-align">
            <fieldset>
                <legend>Emergency Contact(Other Than Parent/Guardian)</legend>
             <label for="emergencyName">Name:</label>
             <input type="text" id="emergencyName" /><br>
             <label for="emergencyPhone">Phone:</label>
             <input type="text" id="emergencyPhone" /><br>
             
            </fieldset>
          </div>
          
          <br>
          <div class="label-align">
              <fieldset>
                  <legend>School</legend>
                  <label for="schoolName">Name:</label>
                  <input type="text" id="schoolName" /><br>
                  <label for="schoolCity">City:</label>
                  <input type="text" id="schoolCity" /><br>
                  <label for="schoolState">State:</label>
                  <input type="text" id="schoolState" /><br>
                  <label for="schoolZip">Zip:</label>
                  <input type="text" id="schoolZip" /><br>
              </fieldset>
          </div>

          <br>
          <br>
          <br>
    </form>
</div>
<div class="col-lg-3 col-md-3"></div>

<?php
  require 'footer.php';
?>

</body>
</html>