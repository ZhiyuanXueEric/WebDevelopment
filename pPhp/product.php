<!DOCTYPE html>

<!--
Food Menu Product Page
product.php
CIS425
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

	<!-- logo link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 
    
	<!-- Web Page Title -->
	<title>Xue Product</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
		<div class="food">
			<img src="project/pImages/product1.jpg" alt="Product 1" />Kung-pao Chicken
			<img src="project/pImages/product2.jpg" alt="Product 2" />Ma-po Tofu
		</div>
		
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>