<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body{
      background-image: url("images.jpg");
    }
    </style>
  </head>

  <body>

    <div class="container">
	
	<form class="form-signin" action="register.php" method="POST">
	
		<h2 class="form-signin-heading">Please Register !</h2>
       
        <input type="digits" name="username" class="form-control" placeholder="AdmissionNumber" required="" >
		
		
        <input type="digits" name="email" class="form-control" placeholder="Email" required="" >
		
        
        <input type="password" name="pass" class="form-control" placeholder="Password" required="">
        
		
        <input type="password" name="pass1" class="form-control" placeholder="ConfirmPassword"  required="">
		
		
		
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>
    </form>
	</div>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['pass']);
	$pass1 = mysql_real_escape_string($_POST['pass1']);
	$email = mysql_real_escape_string($_POST['email']);
	if($username && $pass && $pass1 && $email)
	{
		if($pass == $pass1)
		{
			$connect = mysql_connect("127.0.0.1","root","");
			mysql_select_db("users");
			$query = mysql_query("INSERT INTO users  VALUES('$username','$pass','$email');");
			echo "You have been registered,";
		}
		else
		{
			echo "password incorrect";
		}
		
	}
	else
	{
		echo "All fields are required";
	}
}
?>	
	
	
	
	
	
	
	
	
	
	
	
	