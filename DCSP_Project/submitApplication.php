<?php
	require ('connect.php');

		if (isset($_POST['submitApplication']))
		{

			$session = $mysqli->real_escape_string($_POST['pSession']);
	        $firstname = $mysqli->real_escape_string($_POST['pFirstName']);
	        $lastname = $mysqli->real_escape_string($_POST['pLastName']);
	        $email = $mysqli->real_escape_string($_POST['pEmail']);
	        $address = $mysqli->real_escape_string($_POST['pAddress']);
			$city = $mysqli->real_escape_string($_POST['pCity']);
	        $state = $mysqli->real_escape_string($_POST['pState']);

	        echo "here";

	        $query = "INSERT INTO `participant` (p_session, p_firstname, p_lastname, p_email, p_address, p_city, p_state) VALUES ('$session', '$firstname', '$lastname', '$email', '$address', '$city', '$state')"; 
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