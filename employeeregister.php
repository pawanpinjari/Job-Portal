<?php session_start();
?>
<!DOCTYPE html>


<html >
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>

			
	<div class="reg-main">
	<marquee behavior="" direction="" class="marquee">JOB PORTAL</marquee>
				<div class="reg-content">
					<center>
                        
						<h2 class="title">EMPLOYEE REGISTER</a></h2>
					</center>
					<div class="entry">
						<form action="process_employee_register.php" method="post" enctype="multipart/form-data" >
							<div class="main-form">
							<div class="left">
							<label for="">FULL NAME</label> <br> 
							<input type="text" name="nm" placeholder="Your Name" style="width:200px;">
							<br><br>
							 <label for="">PASSWORD</label><br>
							 <input type="password" placeholder="Password" name="pwd">
							<BR><BR>
							<label for="">GENDER</label> <BR> 
							<INPUT TYPE = "RADIO" VALUE="MALE" name="gender"><b>MALE</b> 
							<INPUT TYPE = "RADIO" VALUE="female"name="gender"><b>FEMALE</b> 
							<br><BR> 
							<label for="">EMAIL</label> <BR> 
							<INPUT TYPE = "TEXT" name="email" placeholder="Email" style="width:200px;">
							<BR><BR> 
							<label for="">ADDRESS</label> <BR> 
							<TEXTAREA name="addr" placeholder="Address" style="width:200px;"></TEXTAREA>
							<BR><BR>  
							
							<label for="">MOBILE NO</label>.<BR> 
							<INPUT TYPE = "TEXT" name="mobile" placeholder="Mobile No." style="width:200px;">
							<br><br>
						     </div>
							<div class="right">
							<label for="">CURRENT LOCATION</label> <BR>
							<INPUT TYPE="TEXT" name="cl" placeholder="Location" style="width:200px;">
							<BR><BR>
							<label for="">CURRENT SALARY</label> <BR>
							<INPUT TYPE="TEXT" name="cas" placeholder="Salary" style="width:200px;">
							<BR><BR>
							<label for="">CURRENT COMPANY</label><BR>
							<INPUT TYPE ="TEXT" name="cindustry" placeholder="Company" style="width:200px;">
							<BR><BR>
							<label for="">QUALIFICATION</label><BR>
							<INPUT TYPE = "TEXT" name="quali" placeholder="Qualification" style="width:200px;">
							<BR><BR>
							<label for="">PROFILE</label><BR> 
							<TEXTAREA name="profile" placeholder="Profile" style="width:200px;"></TEXTAREA>
							<br><br>
							<label for="">RESUME</label><br>
							<input type="file" name="resume" style="width:200px;">
							<br><br> 				
                            </div>
							</div><br>
							<center><input type="submit" value="Register" class="button"></center>
							<!-- <br><br><br><br><br><br> -->
						</form>
						<p>Aleady have an account? <a href="login.php">Login</a> 
						You are Employee? <a href="recruiterregister.php">Recruiter Register</a></p>
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
