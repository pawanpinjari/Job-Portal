<?php session_start();
require_once 'includes/config.php';
?>


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
			<div id="content">
				<div class="post">
					
					<h2 class="title">POST JOB</a></h2>
					<div class="entry">
					<form action="process_postjob.php" method="post">
						<div class="left">
						TITLE<br> <input type="text" name="title" style="width:200px;">
						<BR><BR>CATEGORIES
							<br><SELECT name="cat" style="width:200px;">
							<?php
								require_once 'includes/config.php';
	
						    $q="select * from categories";
	
						$res=mysqli_query($db,$q) or die('wrong query');
	
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
						</SELECT>
								
							<br><BR> WORKING HOURS <BR> <INPUT TYPE = "TEXT"name="hours" style="width:200px;">
							<BR><BR> SALARY<BR><INPUT TYPE ="TEXT" name="salary" style="width:200px;">
						</div>
						<div class="right">
						    EXPERIENCE <BR> <INPUT TYPE ="TEXT" name="experience" style="width:200px;">
							<BR><BR>DISCRIPTION<BR> <TEXTAREA name="disc" style="width:200px;"></TEXTAREA >
							<BR><BR>CITY<BR><INPUT TYPE="TEXT" name="city" style="width:200px;">
							<br><br> <input type="submit" value="submit">
						</div>
							
					</form>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			
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
