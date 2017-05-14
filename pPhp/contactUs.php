<!DOCTYPE html>

<!--
Final Project
contactUs.php
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
	<title>Xue Contact Us</title>

  </head>

  <body>
	<div class="wrapper">
		<?php include('../pPhp/pHeader.php'); ?>  <!--include method grabs the PHP codes -->
		
		<form class="regform" action="https://webapp4.asu.edu/pubtools/Mail" method="post">
		<p>Contact Us Form</p>
		You can use this form to contact us! Please hover over the textboxes to see rules
			<p>	
				<!-- 3 hidden elements to process smtp email -->
				
				<!-- This element controls where the email is send -->
				<input type="hidden" name="sendto" value="dennis.anderson@asu.edu" />
				
				<!-- This element controls the subject line of the email -->
				<input type="hidden" name="subject" value="CIS425 Final Project Website Inquiry" />
				
				<!-- This element handles the return post from smtp server -->
				<input type="hidden" name="location" value="http://cis425.wpcarey.asu.edu/zxue6/project/pPhp/pThankYou.php" />
				
				<!-- name -->
				<label for="name">Your Full Name:</label>
				<input type="text" id="name" name="name" 
				autofocus 
				required 
				title="Name: 3-30 chars; letters, spaces and - or ' only!"
				placeholder="Your Full Name"
				pattern="[a-zA-Z-' ]{3,30}"
				/>
				<br />
				
				<!--email-->
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" 
				required
				title="Email: 6-50 chars, valid email only!"
				placeholder="Email"
				pattern="[a-z0-9-_.$]+@[a-z0-9-.]+\.[a-z]{2,16}" 
				maxlength="50"
				/>
				<br />
				
				<!--comments-->
				<label for="comments">Comments:</label>
				<textarea id="comments" name="comments" rows="3" cols="49"
				required 
				placeholder="Comments"
				title="Comments: 2-500 chars..."></textarea>
				<br />
			</p>
		
			<p class="submit">
				<input type="submit" value="SEND EMAIL" />
				<span class="reset">
					<input type="reset" value="CLEAR" />
				</span>
			</p>
		
		</form>

		<div class="prefooter"></div>
		
		<?php include('../pPhp/pFooter.html'); ?>
		
	</div>

  </body>

</html>