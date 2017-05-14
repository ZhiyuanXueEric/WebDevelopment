<!--
Project Home header
pHeader.php
CIS425
Fall 2016
Zhiyuan Xue 
-->

<?php
	// check to see if session established - start or join as needed
	if(!isset($_SESSION))
	{
		session_id("zxue6");
		session_name("zxue6");
		session_start("zxue6");
	}
?>

<header>
	<ul>
		<li><a href="project/pPhp/home.php">Home</a></li>	
		<li><a href="project/pPhp/product.php">Food Menu</a></li>
		<li><a href="project/pPhp/aboutUs.php">About Us</a></li>
		<li><a href="project/pPhp/signUp.php">Sign Up</a></li>
		<li><a href="project/pPhp/contactUs.php">Contact Us</a></li>
	
	<!-- session is server-side only, sessions will end when closing the browser-->
	    <?php
		if(isset($_SESSION['zxue6']) && $_SESSION['zxue6'] != "")
			echo'<li><a href="project/pPhp/pLogout.php">logout</a></li>';
		else
			echo'<li><a href="project/pPhp/pLogin.php">login</a></li>';
	    ?>

	</ul>
</header>