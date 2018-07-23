<?php
$a=MySQL_Connect("localhost","root","");
	$e=$_POST['name'];
	$f=$_POST['username'];
	$g=$_POST['gender'];
	$h=$_POST['address'];
	$i=$_POST['phone'];
	$j=$_POST['email'];
	$k=$_POST['dob'];
	$l=$_POST['pass1'];
	$m=$_POST['pass2'];
	$n=$_POST['ques'];
		
	
		if(!$a)
		{ 
			die('Could not connect'.mysql_error());
		}
		MySQL_select_db("se_project",$a); //database
		$s="INSERT INTO create_account(`name`,`username`,`gender`,`address`,`phone`,`email`,`dob`,`pass1`,`pass2`,`ques`) VALUES('$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
		$o=MySQL_Query($s,$a);
		if(!$o)
			die('Error'.mysql_error());
		else
		{
			if($e==null)
				echo('Enter valid data');
			else
			{
				echo "Record added";
				header("Location:User_Account.html");
			}
		}
	mysql_close($a);
?>


