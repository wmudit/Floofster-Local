<?php

	$db_name = "thepyoql_thepetnetwork";
	$username = "thepyoql_mudit";
	$password = "mudit123..";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);

	$post_id = $_GET['post_id'];
	$user_id = $_GET['user_id'];
	$comment = $_GET['comment'];

	$query = "INSERT INTO comments(post_id, user_id, comment) VALUES ($post_id, $user_id, '$comment')";

	if(mysqli_query($connection, $query)){
		echo "Success";
	} else {
		echo "Error";
	}

	mysqli_close($connection);