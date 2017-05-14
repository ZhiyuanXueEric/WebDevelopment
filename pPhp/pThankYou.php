<!DOCTYPE html>

<!--
Final Project
pThankYou.php
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
	<meta name="robots" content="noindex,nofollow" />

	<!-- favicon link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 
	    
	<!-- Web Page Title -->
	<title>Xue Thank You</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
			<p class="center">
				Thank you for contacting us - we will respond as soon as we can. 
				Please use the links above to continue browsing the website! 
				<br />
				<img src="project/pImages/thankyou.jpg" alt="thankyou" />
			</p>
		
		<div id="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>