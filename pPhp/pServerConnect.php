<?php
	// Final Project
	// pServerConnect.php
	// Fall 2016
	// Zhiyuan Xue
	
	// initialize local connect variables
	$host = 'localhost';
	$user = 'zxue6';
	$pw   = 'priceWHEELnice';
	$db   = 'zxue6';
	
	// connect to database
	$dbc = mysqli_connect($host, $user, $pw, $db)
		or die('SERVER CONNECT ERROR: '. mysqli_connect_error());
?>