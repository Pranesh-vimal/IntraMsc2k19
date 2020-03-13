<?php 
	
	 session_start();
    if (isset($_SESSION['uname'])) {
        header("location:dashboard.php");
        exit();
    }
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - MSc Intra Department Function</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
    <style type="text/css">
    	body{
    		font-family: 'Varela Round', sans-serif;
    	}

        input:focus, textarea:focus, select:focus{
        outline: none;
    }
    </style>
</head>
<body>
<?php 
	require 'header.php';
 ?>
<div class="w3-padding-32 w3-hide-small w3-panel"></div>
<div class="w3-row w3-padding-64">
	<div class="w3-third w3-padding"></div>
	<div class="w3-third w3-padding w3-center">
			<div class="w3-card-4 w3-padding  w3-round-large">
				<p class="w3-padding w3-center w3-text-white w3-tag w3-round-large "> Admin Login
				</p>
				<form method="post" action="adcheck.php">
					<label class="w3-tag w3-panel w3-red w3-padding w3-round-large">User Name : </label>
					<input class="w3-border  w3-panel  w3-padding w3-round-large" autocomplete="off" type="text" name="admin" placeholder="Enter Username"><br>
					<label class="w3-tag w3-red  w3-panel  w3-padding w3-round-large">&nbsp; Password : &nbsp; </label>
					<input class="w3-border  w3-panel  w3-padding w3-round-large" autocomplete="off" type="password" name="pass" placeholder="Enter Password"><br> 
					<input class="w3-border  w3-panel  w3-padding w3-round-large w3-button w3-hover-indigo w3-blue" type="submit" name="login" value="Login ">
				</form>
				 <?php 
                    if (isset($_GET['error'])) { ?>
                        <div class="w3-container w3-panel w3-center w3-tag w3-red w3-round-large w3-panel w3-small w3-padding">
                    <?php
                        if ($_GET['error'] == "fillall") {
                            echo "Fill All Fields *";
                        } elseif ($_GET['error'] == "passerr") {
                            echo "Password Wrong !";
                        }elseif ($_GET['error'] == "unameerr") {
                            echo "Username Doesn't Exist !";
                        }
                      }
                 ?>  
			</div>
	</div>
	<div class="w3-third w3-padding"></div>
</div>
<?php 
	require 'footer.php';
 ?>
</body>
</html>