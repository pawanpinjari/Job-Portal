
<?php session_start();
require_once 'includes/config.php';


$q="select * from jobs where j_active=1 order by j_id desc ";
$res=mysqli_query($db,$q) or die ("can not select database");


?>
<!DOCTYPE html >


<html >
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
		if(isset($_SESSION['status'])&& $_SESSION['unm']=='admin')
		{
			header("location:admin/index.php"	);
		}
		else{
			// include("includes/logo.inc.php");
			include("includes/menu.inc.php");
		}
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
		<?php
			if(isset($_SESSION['status']))
            {
				echo'<h2 class="title"><center><b>Welcome '.$_SESSION['unm'].'!</b></center></h2>';
            }
			else{
				echo'<h2 class="title"><center><b><a href="login.php">Please Login First!</a></b></center></a></h2>';
			}
			
		?>
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					
					
					<p class="meta"></p>
					<div class="entry">
					<h2><b>latest job</b></h2>
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
