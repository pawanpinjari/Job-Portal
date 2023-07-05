<ul>

	<li><a href="home.php" class="first">Home</a></li>


	<li><a href="contact.php">Contact</a></li>

    <?php
		if(isset($_SESSION['recruiter']))
		{
			echo '<li><a href="postjob.php">Post job</a></li>';
		}
	
	?>

	<?php

		if(isset($_SESSION['recruiter']))
		{
			echo '<li><a href="manage.php">Manage job</a></li>';
		}
	
	?>

	<?php
	
		if(isset($_SESSION['status'])&& $_SESSION['unm']=='admin')
		{
			echo '<li><a href="admin/index.php">Admin</a></li>';
		}
	
	?>

    <?php
	
		if(isset($_SESSION['status']))
		{
			echo '<li><a href="process_logout.php">Logout</a></li>';
		}
		

	?>
	<!-- <?php
		if(!isset($_SESSION['status'])){
			echo '<li><a href="login.php">Log In</s></li>';
		}
	?> -->
</ul>
