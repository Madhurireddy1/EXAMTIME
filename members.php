<?php

session_start();
if($_SESSION['username'] || $_SESSION['password'])
{
	$username = $_SESSION['username'];
	echo "you are logged in as ".$_SESSION['username'];
	echo "<a href='logout.php'> LogOut</a>";
	echo "<title>$username</title>";
	
}
else
{
	header("header:index.php?notify=Oops! Something went wrong.");
}


?>