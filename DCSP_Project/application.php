<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <script>
  function validateForm() {
    var errMessage = "";
    var validation = true;
    if (!validateOption(document.forms['application']['pSession']))
    {
        errMessage+='Please select a session.\n';
        validation = false;
    }
    var x = document.forms["application"]["pFirstName"].value;
    if (x == null || x == "") {
      errMessage+="You must give a first name.\n";
      validation = false;
    }
    var x = document.forms["application"]["pLastName"].value;
    if (x == null || x == "") {
      errMessage+="You must give a last name.\n";
      validation = false;
    }
    var x = document.forms["application"]["pEmail"].value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give a valid email.\n";
      validation = false;
    }
    var x = document.forms["application"]["pAddress"].value;
    if (x == null || x == "") {
      errMessage += "You must give a valid Address.\n";
      validation = false;
    }
    var x = document.forms["application"]["pCity"].value;
    if (x == null || x == "") {
       errMessage+="You must give a City.\n";
       validation = false;
    }
    var x = document.forms["application"]["pState"].value;
    if (x == null || x == "") {
      errMessage += "You must give a State.\n";
      validation = false;
    }
    var x = document.forms["application"]["pZipCode"].value;
    var re = /^[0-9]{5}$/;
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give a valid zip code.\n";
      validation = false;
    }
    var x = document.forms["application"]["pAge"].value;
    if (x == null || x == "" || x.match(/[a-z]/i) || x<6 || x>20) {
      errMessage += "You must give a valid age.\n";
      validation = false;
    }
    if (!validateDOB()) {
      errMessage += "You must give a valid date of birth.\n";
      validation = false;
    }
    if (!validateOption(document.forms['application']['race'])) {
      errMessage += "You must check at least one box under race.\n";
      validation = false;
    }
    var x = document.forms["application"]["grade"].value;
    if (x == null || x == "" || x>2100 || x<2015) {
      errMessage += "You must give a valid grade.\n";
      validation = false;
    }
    var x = document.forms["application"]["gpa"].value;
    var re = /^[0-4]{1}\.[0-9]{2}$/
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give a valid GPA.\n";
      validation = false;
    }
    if (!validateOption(document.forms["application"]["size"]))
    {
        errMessage += 'Please select a size.\n';
        validation = false;
    }
    var x = document.forms["application"]["parent1FirstName"].value;
    if (x == null || x == "") {
      errMessage += "You must give Parent 1'sfirst name.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent1LastName"].value;
    if (x == null || x == "") {
      errMessage += "You must give Parent 1's last name.\n";
      validation = false;
    }
   /* var x = document.forms["application"]["parent1Email"].value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give Parent 1's valid email.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent1Phone"].value;
    var re = /^[0-9]{10}$/
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give Parent 1's valid phone number.\n";
      validation = false;
    }*/
    var x = document.forms["application"]["parent2FirstName"].value;
    if (x == null || x == "") {
      errMessage += "You must give Parent 2's first name.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent2LastName"].value;
    if (x == null || x == "") {
      errMessage += "You must give Parent 2's last name.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent2Email"].value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give Parent 2's valid email.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent2Phone"].value;
    var re = /^[0-9]{10}$/
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give Parent 2's valid phone number.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent3FirstName"].value;
    if (x == null || x == "") {
      errMessage += "You must give an emergency first name.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent3LastName"].value;
    if (x == null || x == "") {
      errMessage += "You must give an emergency last name.\n";
      validation = false;
    }
    var x = document.forms["application"]["parent3Phone"].value;
    var re = /^[0-9]{10}$/
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give an emergency valid phone number.\n";
      validation = false;
    }
    var x = document.forms["application"]["schoolName"].value;
    if (x == null || x == "") {
      errMessage += "You must give the School's name.\n";
      validation = false;
    }
    var x = document.forms["application"]["schoolCity"].value;
    if (x == null || x == "") {
       errMessage+="You must give the School' City.\n";
       validation = false;
    }
    var x = document.forms["application"]["schoolState"].value;
    if (x == null || x == "") {
      errMessage += "You must give the School's State.\n";
      validation = false;
    }
    var x = document.forms["application"]["schoolZipCode"].value;
    var re = /^[0-9]{5}$/;
    if (x == null || x == "" || !re.test(x)) {
      errMessage += "You must give the School's valid zip code.\n";
      validation = false;
    }
    if (!validation) {
      alert(errMessage);
      return validation
    }
    return validation
  }
  </script>

  <script>
  function validateDOB()
{
    var dob = document.forms["application"]["pDOB"].value;
    var pattern = /^(([0]{1})+([1-9]{1})|([1]{1})+([0-2]{1}))\/((([0]{1})+([1-9]{1}))|(([1-2]{1})+([0-9]{1}))|(([3]{1})+([0-1]{1})))\/((([1]{1})+([9]{1})+([9]{1})+([6-9]{1}))|(([2]{1})+([0]{1})+([0]{1})+([0-9]{1}))|(([2]{1})+([0]{1})+([1]{1})+([0-1])))$/;
    if (dob == null || dob == "" || !pattern.test(dob)) {
        return false;
    }
    else {
        return true
    }
}
  </script>

<script>
function validateOption(radios)
{
var checked = false;
for (var i = 0, radio; radio = radios[i]; i++) {
    if (radio.checked) {
        checked = true;
        break;
    }
}

if (!checked) {
    return false;
}

return true;
}
</script>

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
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>
</div>

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
    <legend><h1>Bulldog Bytes Application</h1></legend>
    <p>Elements marked with * are not required</p> <br /><br />
    <form name="application" action="submitApplication.php" onsubmit="return validateForm()" method="post" class="form-inline"> 

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
              <input type="checkbox" name="race" value="other">Other<br />
              <input type="checkbox" name="race" value="no response">Prefer Not to Respond<br>
          </div>
          
          <br>
          
          <div class="label-align">
              <label for="grade">Graduation Year:</label>
              <input type="text" id="grade" name="grade" placeholder="2020"/><br />
              <label for="gpa">GPA:</label>
              <input type="text" id="gpa" name="gpa" placeholder="3.50"/>
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
            <input type="text" id="parent1firstName" name="parent1FirstName" placeholder="First Name"/><br>
            <label for="parent1Name">Last Name:</label>
            <input type="text" id="parent1lastName" name="parent1LastName" placeholder="Last Name"/><br>
            <label for="parent1Email">Email:</label>
            <input type="text" id="parent1Email" name="parent1Email" placeholder="Email"/><br>
            <label for="parent1Phone">Phone:</label>
            <input type="text" id="parent1Phone" name="parent1Phone" placeholder="1234567891"/><br>
            <label for="parent1AltPhone">Alternate Phone*:</label>
            <input type="text" id="parent1AltPhone" name="parent1AltPhone" placeholder="Alternate"/><br>
                
            <br>
            <br>

            <label for="parent1Name">Parent/Guardian</label><br>
            <label for="parent1Name">First Name:</label>
            <input type="text" id="parent1firstName" name="parent2FirstName" placeholder="First Name"/><br>
            <label for="parent1Name">Last Name:</label>
            <input type="text" id="parent1lastName" name="parent2LastName" placeholder="Last Name"/><br>
            <label for="parent1Email">Email:</label>
            <input type="text" id="parent1Email" name="parent2Email" placeholder="Email"/><br>
            <label for="parent1Phone">Phone:</label>
            <input type="text" id="parent1Phone" name="parent2Phone" placeholder="Home"/><br>
            <label for="parent1AltPhone">Alternate Phone*:</label>
            <input type="text" id="parent1AltPhone" name="parent2AltPhone" placeholder="Alternate"/><br>
          </div>
          </fieldset>

          <br>

          <div class="label-align">
            <fieldset>
                <legend>Emergency Contact(Other Than Parent/Guardian)</legend>
             <label for="emergencyfirstName">First Name:</label>
             <input type="text" id="emergencyfirstName" name="parent3FirstName" placeholder="First Name"/><br>
             <label for="emergencylastName">Last Name:</label>
             <input type="text" id="emergencylastName" name="parent3LastName" placeholder="Last Name"/><br>
             <label for="emergencyPhone">Phone:</label>
             <input type="text" id="emergencyPhone" name="parent3Phone" placeholder="Phone"/><br>
             
            </fieldset>
          </div>
          
          <br>
          <div class="label-align">
              <fieldset>
                  <legend>School</legend>
                  <label for="schoolName">Name:</label>
                  <input type="text" id="schoolName" name="schoolName" placeholder="Name"/><br>
                  <label for="schoolCity">City:</label>
                  <input type="text" id="schoolCity" name="schoolCity"placeholder="City"/><br>
                  <label for="schoolState">State:</label>
                  <input type="text" id="schoolState" name="schoolState" placeholder="State"/><br>
                  <label for="schoolZip">Zip:</label>
                  <input type="text" id="schoolZip" name="schoolZipCode" placeholder="ZIP"/><br>
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