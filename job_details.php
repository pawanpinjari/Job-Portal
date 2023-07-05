<?php session_start();
require_once 'includes/config.php';

$q = "select * from jobs where j_id =".$_GET['id'];
	
	$res = mysqli_query($db,$q) or die("Wrong Query");
	
	$row = mysqli_fetch_assoc($res);
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper" >
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<div id="search">
		<?php
		
		include("includes/logo.inc.php");
		?>
		</div>
	</div>
</div>

<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post reg-content job_details" >
					
					<h2 class="title"><?php echo $row['j_title']; ?></h2>
					<div class="entry">
						<table width="100%" border="0">
							
						<?php
						
						echo '<tr><td width="30%"><b>Company:</b><td>'.$row['j_company'].'</td></tr>
								<tr><td><b>Category:</b></td><td>'.$row['j_category'].'</td></tr>
								<tr><td><b>Salary:</b></td><td>'.$row['j_salary'].'</td></tr>
								<tr><td><b>Hours:</b></td><td>'.$row['j_hours'].'</td></tr>
								<tr><td><b>Experience:</b></td><td>'.$row['j_experience'].'</td></tr>
								<tr><td><b>City:</b></td><td>'.$row['j_city'].'</td></tr>
								<tr><td><b>Description:</b></td><td>'.$row['j_discription'].'</tr>
								';
						
						?>
							
					
						</table>
						<?php
                	
                				if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
                				{
                				
									echo '<center><button class="button" style="width:80px;"><a href="process_apply.php?jid='.$row['j_id'].'"style="color:white"> Apply </a></button></center>';
									
                				}
                	
                		?>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<br><br>
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
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
