<?php session_start();
require_once 'includes/config.php';
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}

$q="delete from contact where cont_fnm='".$_GET['cat']."'";
mysqli_query($db,$q) or die ("wrong query");
mysqli_close($db);
header("location:contact.php");
?>