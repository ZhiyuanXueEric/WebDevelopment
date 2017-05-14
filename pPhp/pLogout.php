<?php
	// Final Project 
	// pLogout.php
	// Fall 2016
	// Zhiyuan Xue
	
	session_id("zxue6");
	session_name("zxue6");
	session_start("zxue6");
	session_unset("");
	session_destroy("zxue6");
	$_SESSION = array();
	header('Location: home.php');
	exit;
?>