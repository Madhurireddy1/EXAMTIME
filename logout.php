<?php

session_start();
if($_SESSION['username'] || $_SESSION['password'])
{
	session_destroy();
	header("location:index.php?notify=You are logged out");
}
?>