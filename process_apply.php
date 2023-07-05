<?php session_start();
require_once 'includes/config.php';
	if(empty($_GET))
	{
		header("location:home.php");
	
	}
	
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($db,$q) or die("wrong query");
	header("location:home.php");
	
?>