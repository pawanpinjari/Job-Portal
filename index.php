<html>
<head>

<?php
include("includes/head.inc.php");
?>

</head>

<body class="body">
    <marquee behavior="" direction="" class="marquee">JOB PORTAL</marquee>
<div class="login-page">
  <div class="form">
    <center><h2><b>LOGIN</b></h2></center><br>
    <form class="login-form" action="process_login.php" method=POST>
    <input type="text" name="l_email" placeholder="email address"/>
      <input type="password" name="pwd" placeholder="password"/>
      <select name="cat" class="select">
                <option> Employee </option>
                <option> Recruiter </option>
            </select>
      <input class="button" type="submit" value="login">
      <p class="message">Not registered? <br>
       <b> <a href="employeeregister.php">Employee Register</a> &nbsp;&nbsp;
      <a href="recruiterregister.php">Recruiter Register</a></b>
    </p>
    </form>
  </div>
</div>   
</body>
</html>