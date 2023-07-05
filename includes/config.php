<?php
	$HOST = "localhost";
	$USER = "root";
	$PASSWORD = "";
	$DBNAME = "jobportal";

	$db = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME) or die("Database Connection Error");

	global $db;
	
?>