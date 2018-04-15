<?php  
	$host = "localhost";
	$username = "root";
	$password = "1234";
	$database = "mydbnovo";
	$connection =  mysql_connect($host, $username, $password) or die(mysql_error());
	mysql_select_db($database) or die (mysql_error());

?>