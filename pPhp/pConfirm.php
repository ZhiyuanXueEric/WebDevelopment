<!DOCTYPE html>

<!--
Final Project
pConfirm.php
Fall 2016
Zhiyuan Xue 
-->

<?php
	//connect to db
	include('pServerConnect.php');
	
	//set timezone
	date_default_timezone_set('MST');
	
	//get and store the time of day
	$time = date("G");

	// include the rest of the confirm php code
	include('pConfirmCode.php');
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
	<meta http-equiv="refresh" content="7; url=project/pPhp/pLogin.php" />

	<!-- logo link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 

	<!-- Web Page Title -->
	<title>Xue Confirm</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
			<p class="color">
				<?php
					if ($time < "12")
						echo 'Good Morning ' . $oname;
					elseif ($time < "17")
						echo 'Good Afternoon ' . $oname;
					else
						echo 'Good Evening ' . $oname;
				?>! 
			</p>
			<p class="confirm">
				Thanks for your registration! Your information has been added to the database.
				You may use the links above to continue browsing our site
				or wait for 7 seconds and this page will redirect you to the login page...
				<br />
				<img src="project/pImages/confirm.jpg" alt="Confirm Image" />
			</p>
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>