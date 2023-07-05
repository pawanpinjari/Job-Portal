<?php session_start();
require_once 'includes/config.php';
if(empty($_POST))
{
	exit;
}

if(empty($_POST['l_email'])||empty($_POST['pwd'])||empty($_POST['cat']))
{
	echo "You must enter all fields";
}
if($_POST['cat']=='Employee')
{

	require_once 'includes/config.php';
	
	
	$q = "select * from employees where ee_email = '".$_POST['l_email']."'";
	
	$result = mysqli_query($db, $q) or die("query user error");
	
	
	$row = mysqli_fetch_assoc($result);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['ee_pwd'])
		{
			$_SESSION = array();
			
			$_SESSION['unm']=$row['ee_fnm'];
			$_SESSION['eeid']=$row['ee_id'];
			$_SESSION['cat']='employee';
			$_SESSION['status']=1;
			$_SESSION['employee']=1;
			
			header("location:home.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}	
	
if($_POST['cat']=='Recruiter')
{
	
	$q = "select * from recruiters where r_email = '".$_POST['l_email']."'";
	
	$res = mysqli_query($db,$q) or die("wrong query");
	
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['r_pwd'])
		{
			$_SESSION = array();
			
			$_SESSION['unm']=$row['r_fnm'];
			$_SESSION['eid']=$row['r_id'];
			$_SESSION['cat']='recruiter';
			$_SESSION['status']=1;
			$_SESSION['recruiter']=1;
			header("location:home.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
}
?>