<?php
	require ('connect.php');

		if (isset($_POST['submitApplication']))
		{

			$session = $mysqli->real_escape_string($_POST['pSession']);
			$gender = $mysqli->real_escape_string($_POST['gender']);
	        $firstname = $mysqli->real_escape_string($_POST['pFirstName']);
	        $lastname = $mysqli->real_escape_string($_POST['pLastName']);
	        $email = $mysqli->real_escape_string($_POST['pEmail']);
	        $address = $mysqli->real_escape_string($_POST['pAddress']);
			$city = $mysqli->real_escape_string($_POST['pCity']);
	        $state = $mysqli->real_escape_string($_POST['pState']);
	        $zip = $mysqli->real_escape_string($_POST['pZipCode']);
	        $age = $mysqli->real_escape_string($_POST['pAge']);
	        $dob = $mysqli->real_escape_string($_POST['pDOB']);
	        $dob = date('Y-m-d', strtotime($dob));
	        $race = $mysqli->real_escape_string($_POST['race']);
	        $grade = $mysqli->real_escape_string($_POST['grade']);
	        $gpa = $mysqli->real_escape_string($_POST['gpa']);
	        $tshirt = $mysqli->real_escape_string($_POST['size']);

	        $parentFname1 = $mysqli->real_escape_string($_POST['parent1FirstName']);
	        $parentLname1 = $mysqli->real_escape_string($_POST['parent1LastName']);
	        $parentEmail1 = $mysqli->real_escape_string($_POST['parent1Email']);
	        $parentPhone1 = $mysqli->real_escape_string($_POST['parent1Phone']);
	        $parentPhoneAlt1 = $mysqli->real_escape_string($_POST['parent1AltPhone']);
	        $parentFname2 = $mysqli->real_escape_string($_POST['parent2FirstName']);
	        $parentLname2 = $mysqli->real_escape_string($_POST['parent2LastName']);
	        $parentEmail2 = $mysqli->real_escape_string($_POST['parent2Email']);
	        $parentPhone2 = $mysqli->real_escape_string($_POST['parent2Phone']);
	        $parentPhoneAlt2 = $mysqli->real_escape_string($_POST['parent2AltPhone']);

	        $emergencyFname = $mysqli->real_escape_string($_POST['parent3FirstName']);
	        $emergencyLname = $mysqli->real_escape_string($_POST['parent3LastName']);
	        $emergencyPhone = $mysqli->real_escape_string($_POST['parent3Phone']);

	        $schoolName = $mysqli->real_escape_string($_POST['schoolName']);
	        $schoolCity = $mysqli->real_escape_string($_POST['schoolCity']);
	        $schoolState = $mysqli->real_escape_string($_POST['schoolState']);
	        $schoolZip = $mysqli->real_escape_string($_POST['schoolZipCode']);

	        $query = "INSERT INTO `participant` (sess, gender, f_name, l_name, email, age, dob, race, grade, GPA, tshirt)
	        		 VALUES ('$session', '$gender', '$firstname', '$lastname', '$email', '$age', '$dob', '$race', '$grade', '$gpa', '$tshirt')"; 
	        $result = $mysqli->query($query);

	        $query = "INSERT INTO `address` (street, city, state, zip)
	        		 VALUES ('$address', '$city', '$state', '$zip')";
	        $result = $mysqli->query($query);

	        $query = "INSERT INTO `parent` (f_name, l_name, p_email, phone1, phone2, f_name2, l_name2, p_email2, phone1_2,phone2_2) 
	        		 VALUES ('$parentFname1', '$parentLname1', '$parentEmail1', '$parentPhone1', '$parentPhoneAlt1', '$parentFname2', '$parentLname2', '$parentEmail2', '$parentPhone2', '$parentPhoneAlt2')";
	        $result = $mysqli->query($query);

	        $query = "INSERT INTO `emergency` (f_name, l_name, phone)
	        		 VALUES ('$emergencyFname', '$emergencyLname', '$emergencyPhone')";
	        $result = $mysqli->query($query);

	        $query = "INSERT INTO `school` (school_name, school_city, school_state, school_zip)
	        		 VALUES ('$schoolName', '$schoolCity', '$schoolState', '$schoolZip')";
	        $result = $mysqli->query($query);

        if($result)
        {
            header("Location: applicationSuccess.php");
        }

        else
        {
        	echo "error";
        }
    }
?>