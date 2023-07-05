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
				<div class="post reg-content " style="width:80%;">
					<center>
					<h2 class="title">POST JOB</a></h2>
					</center>
					
					<div class="entry">
					<form action="process_postjob.php" method="post">
						<div class="main-form">

						
						<div class="left">
                        <label for="">TITLE</label>						
                        <br> <input type="text" name="title" style="width:200px;height:25px">
						<br><br><label for="">COMPANY</label> 
						<input type="text" name="company" style="width:200px;height:25px">
						<BR><BR>
						<label for="">CATEGORIES</label>
							<br><SELECT name="cat" style="width:200px;height:25px">
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
								
							<br><BR>
							 <label for="">WORKING HOURS</label> <BR> 
							 <INPUT TYPE = "TEXT"name="hours" style="width:200px;height:25px">
							
						</div>
						<div class="right">
						    <label for="">SALARY</label><BR>
							<INPUT TYPE ="TEXT" name="salary" style="width:200px;height:25px"><BR><BR>
						    <label for="">EXPERIENCE</label> <BR> 
							<INPUT TYPE ="TEXT" name="experience" style="width:200px;height:25px">
							<BR><BR>
							<label for="">DISCRIPTION</label><BR> 
							<TEXTAREA name="disc" style="width:200px;height:25px"></TEXTAREA >
							<BR><BR>
							<label for="">CITY</label>
							<BR><INPUT TYPE="TEXT" name="city" style="width:200px;height:25px">
						</div>
						</div>
						<br><br>
						<center>
						<input type="submit" class="button" value="submit">
						</center> 
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
