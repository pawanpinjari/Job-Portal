<?php session_start();
require_once 'includes/config.php';
		
	$q = "select * from jobs where j_category ='".$_GET['cat']."' and j_active=1";
	
	$res = mysqli_query($db,$q) or die("Wrong Query");
	

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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

<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content" >
				<div class="post reg-content job_details">
					
					<h2 class="title"><?php echo $_GET['cat']; ?></h2>
					
					<div class="entry">
					<ul>		
					<?php
						while($row = mysqli_fetch_assoc($res))
						{
						
							echo '
										<li>
										<a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'</a>
										</li>
								';
						}
						
					?>
					</ul>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
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
