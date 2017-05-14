<!DOCTYPE HTML>

<!--
Sign Up Page
signUp.php
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

	<!-- favicon link -->
	<link type="image/gif" rel="icon" href="project/pImages/logo.jpg" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="project/pStylesheets/project.css" /> 
    
	<!-- Web Page Title -->
	<title>Xue Registration Page</title>

</head>

<body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->

			<form class="regform" action="project/pPhp/pConfirm.php" method="post">
			<p>Dragon Diet Registration Form</p>
			<p>Please go to <a href="project/pPhp/pLogin.php">Login</a>
			   page if you aready have an account!
			   Please hover over the textboxes if you need to see rules...
			</p>

			<p>	
				<!-- name -->
				<label for="name">Enter your full name:</label>
				<input type="text" id="name" name="name" 
				autofocus 
				required 
				placeholder="First and Last Name"
				title="Name: 3-30 chars; letters, spaces and - or ' only!"
				pattern="[a-zA-Z-' ]{3,30}"
				/>
				<br />
				
				<!--username-->
				<label for="uname">Username:</label>
				<input type="text" id="uname" name="uname" 
				required
				placeholder="Username"
				title="Username: 5-15 chars; numbers, letters, and _ - ! $ only!" 
				pattern="[a-zA-Z0-9-_!$]{5,15}" 
				/>
				<br />
				
				<!--password-->
				<label for="pword">Password:</label>
				<input type="password" id="pword" name="pword" 
				required
				placeholder="Password"
				title="Password: 5-15 chars; numbers, letters, and _ - ! $ only!" 
				pattern="[a-zA-Z0-9-_!$]{5,15}" 
				/>
				<br />

				<!--phone number-->
				<label for="tele">Phone Number:</label>
				<input type="tel" id="tele" name="tele" 
				required
				title="Phone number: 10-15 chars; numbers only!" 
				placeholder="Phone Number"
				pattern="[0-9]{10,15}" 
				/>
				<br />
				
				<!--email-->
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" 
				required
				title="6-50 chars, valid email only!"
				placeholder="Email Address"
				pattern="[a-z0-9-_.$]+@[a-z0-9-.]+\.[a-z]{2,16}" 
				maxlength="50"
				/>
				<br />
			</p>
		
			<p class="submit">
				<input type="submit" id="submit" value="SUBMIT" />
				<span class="reset">
				<input type="reset" id="reset" value="CLEAR" />
				</span>
			</p>
			</form>
	
		<div class="prefooter"></div>
		<?php include('../pPhp/pFooter.html'); ?>
	</div>
</body>

</html>