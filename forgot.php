<html>
<head>
	<title>Forgot Password</title>

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
    <div class="container" >

      <form class="form-signin" action="forgot.php" method="POST">
        <h1 class="form-signin-heading">Forgot Password</h1>
		
        
        <input type="email" name="email" class="form-control" placeholder="Type your email" required="" >

		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">submit</button>
		 
	  </form>
	  </div>
	 </body>
</html>
<?php
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$connect= mysql_connect("127.0.0.1","root","");
	mysql_select_db("users");
	$query = mysql_query("SELECT * FROM users WHERE email = '$email'");
	while($row = mysql_fetch_assoc($query))
	{
		$username = $row['username'];
		$password = $row['password'];
		$email1 = $row['email'];
	}
	if($email==$email1)
	{
		$from = "FROM : CSEWEBNODE";
		$to = $email;
		$subject = "Lost password or username";
		$body = "Dear $username \n your Password is: $password \n your username is : $username ";
		
		
		mail($to,$subject,$body,$from);
		
		echo "Check  your inbox";
	}
	else
	{
		echo "Incorrect Email.";
	}
}
else
{
	echo "Please fill your email.";
}
?>

</html>
