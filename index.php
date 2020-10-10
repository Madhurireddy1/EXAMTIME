<!DOCTYPE html>
<html lang="en"><head>
    

    <title>Signin</title>

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

      <form class="form-signin" action="login.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
		
        
        <input type="digits" name="username" class="form-control" placeholder="Admission Number" required="" >
        
		
		
		<input type="password" name="password" class="form-control" placeholder="Password" required="">
		
		
		
		
        
		<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember 
			<p>
			<p>
			<a href="register.php"> Register </a>
			<p>
			<a href="forgot.php">Forgot Password or Username ? </a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      </form>

    </div> <!-- /container -->
	<?php
	if(isset($_GET['notify']))
	{
		echo $_GET['notify'];
	}
	?>

    
  

</body>
<div style="display: none; border: none; cursor: pointer; margin: 0; padding: 0; box-shadow: 0; position: absolute; width: 22px; height: 21px; "
</div>
</html>
