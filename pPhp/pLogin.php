<!DOCTYPE html>

<!--
Login Page
pLogin.php
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
	<title>Xue Login</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
		<p class="rc">
			<?php
				if (isset($_GET['rc']))
				{
				      if ($_GET['rc'] == 1)
						echo 'Invalid Username!';
					if ($_GET['rc'] == 2)
						echo 'Invalid Password!';
					if ($_GET['rc'] == 3)
						echo 'Process worked..';
				}
			?>
		</p>

		<form class="regform" action="project/pPhp/pProcess.php" method="post">
		<p>Dragon Diet Login Form</p>Enter information below to login...Please hover over the textboxes to see rules
			<p>
				<!--username-->
				<label for="uname">Username:</label>
				<input type="text" id="uname" name="uname" 
				required
				autofocus
				title="Username: 5-15 chars; numbers, letters, and _ - ! $ only!" 
				pattern="[a-zA-Z0-9-_!$]{5,15}" 
				placeholder="Username" />
				<br />
				
				<!--password-->
				<label for="pword">Password:</label>
				<input type="password" id="pword" name="pword" 
				required
				title="Password: 5-15 chars; numbers, letters, and _ - ! $ only!" 
				pattern="[a-zA-Z0-9-_!$]{5,15}"  
				placeholder="Password" />
				<br />
			
			<p class="submit">
				<input type="submit" value="SUBMIT" />
				<span class="reset">
					<input type="reset" value="CLEAR" onclick="history.go(0)" />
				</span>
				<span class="check">
					<input type="submit" value="BACK TO REGISTER" 
					onclick="window.location.href='project/pPhp/signUp.php'" />
				</span>
			</p>
		</form>
		
		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>