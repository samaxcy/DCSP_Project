<?php
	//require 'config.php';
    //ob_start();
    //session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Register</title>
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
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
        <legend><h1>Register</h1></legend> <br /><br />
        <form action="doregister.php" method="post" class="form"> 
            <div>
                <label>First Name:</label> <br />
                <input type="text" title="First Name" id="firstname" name="firstname" class="form-control" 
                    placeholder="First Name" /> <br /> <br />
            </div>
            
            <div>
                <label>Last Name:</label> <br />
                <input type="text" title="Last Name" id="lastname" name="lastname" class="form-control" 
                    placeholder="Last Name" /> <br /> <br />
            </div>
            

            <div>
                <label>Email Address:</strong></label> <br />
                <input type="text" title="Email" id="email" name="email" class="form-control" 
                    placeholder="Email Adrress" /> <br /> <br />
            </div>
            

            <div>
                <label>Password:</label> <br />
                <input type="password" title="Password" id="password" name="password" class="form-control" 
                    placeholder="Password" /> <br /> <br />
            </div>
            
            <input type="submit" class="btn btn-info" value="Submit" /> 
        </form>
    </div>
    <div class="col-lg-3 col-md-3"></div>
    

    <?php
        require 'footer.php';
    ?>

    </body>
    </html>