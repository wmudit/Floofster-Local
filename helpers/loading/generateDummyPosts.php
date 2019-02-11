<?php

	$db_name = "thepyoql_thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);

	$user_id = "2c5b8d90100396e1";
	$title = "This is a beautiful title";

	$links = array("images/post_images/1.png", "images/post_images/2.png", "images/post_images/3.png");
	$sizes = array(
				array(720, 720),
				array(1080, 720),
				array(720, 1080)
			 );
	
	for ($x = 0; $x <= 41; $x++) {
		sleep(2);
		$date=date_create();
		$datetime = date_timestamp_get($date);
		$pid = hash("fnv1a64",$datetime.$user_id);

		$idx = mt_rand(0, 2);
		$link = $links[$idx];
		//echo var_dump($link) . " " . var_dump($sizes[$idx][0]). " " . var_dump($sizes[$idx][1]) . "<br>";
		$query = "INSERT INTO posts(post_id, title, img, user_id) VALUES ('$pid', '$title', '$link', '$user_id')";
		$res = mysqli_query($connection, $query);
		echo $res . "<br>";
	}


	mysqli_close($connection);