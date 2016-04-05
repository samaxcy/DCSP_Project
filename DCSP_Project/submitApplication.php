<?php
	require 'connect.php';

	if (isset($_POST['email']) && isset($_POST['password'])){


        $firstname = $mysqli->real_escape_string($_POST['firstname']);
        $lastname = $mysqli->real_escape_string($_POST['lastname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $address = $$mysqli->real_escape_string($_POST['address']);
		$city = $mysqli->real_escape_string($_POST['city']);
        $state = $$mysqli->real_escape_string($_POST['state']);

        $query = "INSERT INTO `participant` (p_firstname, p_lastname, p_email, p_address, p_city, p_state) VALUES ('firstname', 'lastname', '$email', '$address', 'city', 'state')"; 
        $result = $mysqli->query($query);

        if($result){
            header("Location: success.php");

        }
    }
?>