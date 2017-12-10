<?php  
	$hostname 	= "127.0.0.1";
	$username 	= "root";
	$password 	= "";
	$database 	= "penjualan";

	$con = mysql_connect($host, $username, $password) or die("database not found !!");
	mysql_select_db($database, $con);
?>