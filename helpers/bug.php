<?php
	
	$db_name = "thepyoql_thepetnetwork";
	$username = "thepyoql_mudit";
	$password = "mudit123..";
	$server_name = "localhost";
	
	$connection = mysqli_connect($server_name, $username, $password, $db_name);
	
	$bug = $_POST['bug'];
	$user_id = $_POST['user_id']; 
	
	$query = "INSERT INTO bugs VALUES ($user_id, '$bug')";

	if(mysqli_query($connection, $query)){
		$location = "../index";
		header('Location: '.$location);
	}

	mysqli_close($connection);