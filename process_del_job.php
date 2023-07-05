<?php
require_once 'includes/config.php';
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysqli_query($db,$q);
		
		header("location:manage.php");	
?>