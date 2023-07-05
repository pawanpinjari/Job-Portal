<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body >
    <div class="reg-main">
		<marquee behavior="" direction="" class="marquee">JOB PORTAL</marquee>
			<br><br>
			<div class="reg-content">
				<center>
						<h2 class="title">RECRUITER REGISTER</a></h2>
				</center>
				<div class="entry">
					<form action="process_recruiter_register.php" method="post">
						<div class="main-form">
						<div class="left">
						<label for="">RECRUITER NAME </label><br> 
						<input type="text" name="nm" style="width:200px;" placeholder="Full Name">
						<br><br> 
						<label for="">PASSWORD</label> <br> 
						<input type ="password" name="pwd" placeholder="Passward">
						<br><BR>
						<label for=""> COMPANY NAME</label> <BR> 
						<INPUT TYPE = "TEXT" name="cnm" style="width:200px;" placeholder="Company Name">
						<BR><BR>
						<label for="">COMPANY ADDRESS</label>  <BR> 
						<TEXTAREA name="addr" style="width:200px;" placeholder="Company Address"></TEXTAREA>
						</div>
						<div class="right">
						<label for="">PHONE NUMBER</label> <br>
						<input type="text" name="ph" style="width:200px;"placeholder="Numbar">
						<BR><BR> 
						<label for="">EMAIL</label> <BR> 
						<INPUT TYPE = "TEXT" name="email" style="width:200px;" placeholder="Email">
						<BR><BR>
						<label for="">COMPANY PROFILE</label><BR> <br>
						<TEXTAREA name="profile" style="height:50px; width:200px"  placeholder="Company Profile"></TEXTAREA>

						</div>
					    </div>
						<center><br><br> <input type="submit" class="button" value="Register"></center>		
								
					</form><br>
						<p>Aleady have an account? <a href="login.php">Login</a> 
						You are Employee? <a href="employeeregister.php">Employee Register</a></p>
			</div>
		</div>
				
	</div>
			
		

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
