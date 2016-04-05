<?php
    require('connect.php');
    // If the values are posted, insert them into the database.
    error_reporting(0);
    if (isset($_POST['email']) && isset($_POST['password'])){


        //$firstname = $mysqli->real_escape_string($_POST['firstname']);
        //$lastname = $mysqli->real_escape_string($_POST['lastname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $passwordC = $mysqli->real_escape_string($_POST['passwordC']);

        $passhash = md5($password);
 
        $query = "INSERT INTO `user` (email, password) VALUES ('$email', '$passhash')"; 
        $result = $mysqli->query($query);

        if($result){
            header("Location: success.php");

        }
    }
    ?>