<?php

	$db_name = "thepyoql_thepetnetwork";
	$username = "thepyoql_mudit";
	$password = "mudit123..";
	$server_name = "localhost";

	$connection = mysqli_connect($server_name, $username, $password, $db_name);	

	$location = "../adoption.php";

	$target_directory = "../images/adoption_images/";
	$target_file = $target_directory.basename($_FILES["Image"]["name"]);
	$db_img_link = "images/adoption_images/".basename($_FILES["Image"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$name = $_POST['Name'];
	$breed = $_POST['Breed'];
	$age = $_POST['Age'];
	$gender = $_POST['Gender'];
	$city = $_POST['City'];
	$description = $_POST['Description'];
	$user_id = $_POST['User_id'];

	$query = "INSERT INTO adoption(title, gender, city, breed, age, description, image, user_id) VALUES ('$name', '$gender', '$city', '$breed', $age, '$description', '$db_img_link', $user_id)";

	if(mysqli_query($connection, $query)){
		move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file);
		header ('Location: '.$location);
	}
	
	mysqli_close($connection);