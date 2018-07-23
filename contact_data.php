<?php
	$a=MySQL_Connect("localhost","root","");
	$e=$_POST['name'];
	$f=$_POST['email'];
	$g=$_POST['phone'];
	if(!$a)
	{ 
		die('Could not connect'.mysql_error());
	}
	MySQL_select_db("se_project",$a); //database
	$s="INSERT INTO contact(`name`,`email`,`phone`) VALUES('$e','$f','$g')";
	
	$h=MySQL_Query($s,$a);
	
	if(!$h)
		die('Error'.mysql_error());
	else
		if($e==null)
			echo 'Enter valid data';
		else
		{	echo "Record added";
			header("Location:contact_site_details.html");
		}
	mysql_close($a);
?>


