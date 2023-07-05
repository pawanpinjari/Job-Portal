<?php
require_once 'includes/config.php';
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['cnm'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['email'])|| empty($_POST['profile']) ||empty($_POST['pwd']))
	{
		$msg[]="one of your field is empty";
	}

	if(strlen($_POST['pwd']<6))
	{
		$msg[]="please enter atlist 6 digit password";
	}
	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
		
		$nm=$_POST['nm'];
		$cnm=$_POST['cnm'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$email=$_POST['email'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		
		
		$q="insert into recruiters(r_fnm,r_pwd,r_company,r_add,r_ph,r_email,r_company_profile)
		   values ('$nm','$pwd','$cnm','$addr','$ph','$email','$profile')";
		   
		mysqli_query($db,$q)or die("wrong query");
		mysqli_close($db);
		header("location:registation_succ.php");
	}
?>