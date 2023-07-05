<?php session_start();
require_once 'includes/config.php';
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}

	$q="select * from jobs where j_active=0";
	$res=mysqli_query($db,$q);
?>

<!DOCTYPE html">

<html>
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

<div id="wrapper">
	
				<div class=" reg-content ">
					
					<h2 style="font-size:30px;font-width:bold;"><center><font color ="red" >Verify</center></font></a></h2>
					<p class="meta"></p>
					
					<table border="0" width="100%">
					<tr>
						<td>No</td>
							<td>Job Title</td>
							<td>Category</td>
							<td>Accept</td>
					</tr>
						<?php
						$count=1;
						while($row=mysqli_fetch_array($res))
							{
								echo '<tr>
										<td>'.$count.'</td>
										<td> '.$row['j_title'].'</td>
										<td>'.$row['j_category'].'</td>
										<td><a href="process_verify.php?id='.$row['j_id'].'">Accept</a></td>
									</tr>';
									$count++;
							}
						
						?>
						</table>
					
				</div>
				
			</div>
</div>

</body>
</html>
