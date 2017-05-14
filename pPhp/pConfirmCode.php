<?php
	// Final Project
	// pConfirmCode.php
	// Fall 2016
	// Zhiyuan Xue
	
	// get the html values
	// name
	$oname = $_POST['name'];
	$name  = mysqli_real_escape_string($dbc, $oname);
	
	// username
	$uname  = mysqli_real_escape_string($dbc, $_POST['uname']);

	// password
	$pword  = mysqli_real_escape_string($dbc, $_POST['pword']);
	
	// salt & hash password
	$pword = password_hash($pword, PASSWORD_DEFAULT);
	
	// telephone number
	$tele  = mysqli_real_escape_string($dbc, $_POST['tele']);

	// email 
	$email  = mysqli_real_escape_string($dbc, $_POST['email']);

	// verify unique username
	$check = mysqli_query($dbc, "select id from food where uname = '$uname' ")
		   or die('pConfirm read error: ' . mysqli_error($dbc));
	if (mysqli_num_rows($check) != 0)
	{
		header("Location: pUsernameNotAvail.php?&uname=$uname");
		exit;
	}

	// build query
	$query = 
	"insert into food(name,uname,pword,tele,email)" .
	"values('$name','$uname','$pword','$tele','$email')";
	
	// run query
	$result = mysqli_query($dbc, $query)
		or die('DB Write Error: ' . mysqli_error($dbc));
	
	//close the db connection
	mysqli_close($dbc);
?>