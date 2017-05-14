<?php
	// Final Project
	// pProcess.php
	// Fall 2016
	// Zhiyuan Xue
	
	// connect to DB (local or server)
	include('pServerConnect.php');
	
	// pass a 3 back to login.php for testing
	header('Location: pLogin.php?rc=3');
	
	// get username and password from login form 
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']);
	$pword = mysqli_real_escape_string($dbc, $_POST['pword']);
	
	// build a query
	$query = "select * from food where uname = '$uname'";
	
	// run the query 
	$result = mysqli_query($dbc, $query)
		or die('pProcess.php read error:' . mysqli_error());
	
	// check to see if we got a row
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: pLogin.php?rc=1');
		exit;
	}
	
	// if we got here, we can verify username
	
	// store the results of query to process password
	$row = mysqli_fetch_array($result);
	
	// check salted and hashed version of password entered ono login form
	if (password_verify($pword, $row['pword']) == $row['pword'])
	{
		// password match
		session_id('zxue6');
		session_name('zxue6');
		session_start('zxue6');
	
		// populate session variable 
		$_SESSION['zxue6'] = $row['name'];
		
		// close db connection
		mysqli_close($dbc);
		
		// transfer control to welcome page
		header('Location: pWelcome.php');
		exit;
	}
	else
	{
		header('Location: pLogin.php?rc=2');
		exit;
	}
	
	// this code stays at bottom
	// pass a 3 back to pLogin.php for testing
	header('Location: pLogin.php?rc=3');
?>