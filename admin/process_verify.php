<?php
require_once 'includes/config.php';
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$q="update jobs
			set j_active=1
			where j_id=".$_GET['id'];
		
		mysqli_query($db,$q);
		
		header("location:verify.php");	
?>