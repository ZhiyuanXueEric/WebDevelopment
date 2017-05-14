<!DOCTYPE html>

<!--
Final Project
pWelcome.php
Fall 2016
Zhiyuan Xue
-->

<?php
	// start a PHP session
	session_id('zxue6');
	session_name('zxue6');
	session_start('zxue6');
	
	//if user not logged in, send them back to login page
	if (!isset($_SESSION['zxue6']))
	{
		header('Location: pLogin.php');
		exit;
	}	
?> 	


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
	<meta name="robots" content="noindex,nofollow" />

	<!-- logo link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 
    
	<!-- Web Page Title -->
	<title>Xue Welcome</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
			<p class="center">Welcome to Dragon Diet Restaurant! You are logged in as
			<?php echo $_SESSION['zxue6']; ?>. Please use the food menu link above to see our products! Now enjoy your food journey!
			<br />
			<img src="project/pImages/welcome.jpg" alt="welcome" />
			</p>
		
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>