<?php
	// Final Project
	// pLocalConnect.php
	// Fall 2016
	// Zhiyuan Xue
	
	// initialize local connect variables
	$host = 'localhost';
	$user = 'root';
	$pw   = '';
	$db   = 'fall2167';
	
	// connect to database
	$dbc = mysqli_connect($host, $user, $pw, $db)
		or die('LOCAL CONNECT ERROR: '. mysqli_connect_error());
?>