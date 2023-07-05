<?php session_start();
require_once '../includes/config.php';
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/logo.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->

<div id="wrapper">
	
	<div class=" reg-content " >
	<h2 style="font-size:30px;font-width:bold;"><center><font color ="red" >Recent Contact</center></font></a></h2>
			
			<table border="0" width="100%">
		
			<tr>
			<td style="width:15%" ><b>NAME</b>
			
			<td style="width:45%"><b>QUERY</b>
			<td style="width:5%"><b>DEL</b>
			</tr>
			
			
			
			<?php
			
			$q="select * from contact";
			$res=mysqli_query($db,$q)or die("can not connect");
			
			while($row=mysqli_fetch_assoc($res))
			{
				
				echo'
						<tr>
						<td>
						'.$row['cont_fnm'].'<br><small>'.$row['cont_email'].'</small><br><br>
						<td>'.$row['cont_query'].'
						<td><a href="process_delete.php?cat='.$row['cont_fnm'].'"><img src = "delete.png"></a>
						</tr>
			
				';
				
			}
			?>
			</table>
			
			
			<p class="meta"></p>
		</div>
		
	</div>
	
		
		
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
