<?php session_start();
require_once 'includes/config.php';
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
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
	
				<div class="post reg-content " style="height:350px">
					
					<div class="entry " style="margin-right:100px">
					    <h2 class="title">Add category</h2>
					    <p class="meta"></p>
					    <form action="process_addcategories.php" method="POST" class="form">
					        
							 <h2><b>Category Name</b></h2>
							 <p class="meta"></p>
					         <input type = "text" name="nm"> 
							 <p class="meta"></p>
					    	 <input type="submit" class="button" value="ok"" style="width:70px">
					    </form>
					</div>
					<div class="entry">
					<h2 class="title">Delete category</h2>
					<p class="meta"></p>
					<form action="process_deletecategories.php" method="POST" class="form">
					<h2><b>Select Category</b></h2>
						<p class="meta"></p>
						<html>
					<select name="name" style="width:150px;">
						<?php

						
	
						$q="select * from categories";
	
						$res=mysqli_query($db,$q) or die('wrong query');
	
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
					</select>
					<p class="meta"></p>
				    </html>
							<input type="submit" class="button" value="ok" style="width:70px">
					</form>
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
