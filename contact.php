<?php session_start();
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
<!-- end #header -->
<!-- end #header-wrapper -->

<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content ">
				<div class="post reg-content">
					
					<h2 class="title">Contact</h2>
					<div class="entry">
					<form action="process_contact.php" method="post">
						<div class="main-form">
						<div class="left">
						<label for="" style="font-size:15px">Full Name</label> 
						<br><br><input type="text" name="nm" placeholder="Full Name">
						<br><br>
						 <label for="" style="font-size:15px">Email</label> <br><br> 
						 <input type="text" name="email" placeholder="Email">
						</div>
						<div class="right">
							<label for=""style="font-size:15px">Query</label>
						 <br><br> <textarea name="query" style="width:200px;height: 90px;" placeholder="Query"></textarea>
					</div>
						</div>
						
					
					<center><br><br> <input type="submit" value="submit" class="button"></center>
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
