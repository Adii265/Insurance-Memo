<?php
	$a=MySQL_Connect("localhost","root","");
	$f=$_POST['radio'];
	$g=$_POST['comment'];
	if(!$a)
	{	
		die('Could not connect'.mysql_error());
	}
	MySQL_select_db("se_project",$a); //database
	$s="INSERT INTO rate(`radio`,`comment`) VALUES('$f','$g')";
	$e=MySQL_Query($s,$a);
	if(!$e)
		die('Error'.mysql_error());
	else
		if($f==null or $g==null)
			echo('Your option was not valid or the comment box is empty');
		else
		{
			echo "Record added";
			header("Location:Thanku_rating.html");
		}
	mysql_close($a);
?>


