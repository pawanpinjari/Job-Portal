<?php session_start();
require_once 'includes/config.php';
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}

if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['name']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{

$name=$_POST['name'];
$q="delete from categories where cat_nm='$name'";
mysqli_query($db,$q) or die ("wrong query");
mysqli_close($db);
header("location:category.php");
}