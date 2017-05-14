<!DOCTYPE HTML>

<!--
About Us Page
aboutUs.php
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
	<title>Xue About Us Page</title>

</head>

<body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
			<p class="bold">
				Dragon Diet is a Chinese food restaurant that was founded in 2016 by Zhiyuan Xue, a busy full-time
				student who was passionate about cooking and wanted to add more flavor to his home cooked meals.
				Our goal is to serve prime Chinese food in the valley with unique flavors and quality customer services.
				We want you to enjoy the traditional Chinese food but we also want you to eat healthy food. In Dragon
				Diet, we only choose fresh vegetables, meat and seasoning sold at local markets. To ensure the food
				quality, we also have an internal team to test the food’s flavor, freshness and quality.
				<br /><br />
				In our restaurant, we offer a variety of different Chinese food like Beijing Duck, Black Pepper Beef, Spicy
				Tofu and so on. We are a small restaurant that provide online ordering and delivery services. Customers
				can check out the website and look at the food menu to decide what they want to order. After receiving
				orders, we will deliver the fresh made Chinese food as soon as possible.	
			</p>
		
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

      </body> 
</html>
