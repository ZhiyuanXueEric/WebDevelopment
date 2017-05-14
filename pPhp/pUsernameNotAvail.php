<!DOCTYPE html>

<!--
Final Project
pUsernameNotAvail.php
Fall 2016
Zhiyuan Xue
-->

<html lang="en">
  	
  <head>
	<!--Establish correct base from URL-->
	<?php
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		    echo '<base href="http://localhost/CIS-425/2167-Fall/Assigments/">';
		else
		    echo '<base href="http://cis425.wpcarey.asu.edu/zxue6/">';
	?>
	<!-- Meta tag -->
	<meta charset="utf-8" />
	<meta http-equiv="refresh" content="7; url=project/pPhp/signUp.php" />

	<!-- logo link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 
    
	<!-- Web Page Title -->
	<title>Xue Username Not Available</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
			
			<p class="center">
				Sorry!
				Username [
				<span class="red"><?php echo @$_GET['uname']; ?></span>
				] is not available! This page will automatically re-direct you back to the registration page after 7 seconds.
				Please try another username...
			</p>
		
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>