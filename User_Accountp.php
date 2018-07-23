<?php
	$a=mysql_connect("localhost","root","");
	if(!$a)
		die('Could not connect:' .mysql_error());
	mysql_select_db('se_project');
	$re=mysql_query(select * from create_account);
	if(!$re)
		die('Query failed:',mysql.error());