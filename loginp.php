<?php
	$username = $_POST['username'];
	$password = $_POST['Password'];

	$link = mysql_connect("localhost","root","");
	mysql_select_db('se_project', $link) or die(mysql_error());
	if($link === false)
	{
	    die("ERROR: Could not connect. " .mysql_error());
	}
	$query = "SELECT * FROM `create_account` WHERE username='$username' and pass1='$password'";

	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);
	if($count==1)
	{
		echo("Login Successful");
		header("Location:User_Account.html"); /* Redirect browser */
		exit();
	}
	else
	{
		echo("Login Unsuccessfull");
	}
?>