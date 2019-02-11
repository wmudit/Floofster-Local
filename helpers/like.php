<?php
	
	$db_name = "thepyoql_thepetnetwork";
	$username = "root";
	$password = "";
	$server_name = "localhost";
	
	$connection = mysqli_connect($server_name, $username, $password, $db_name);
	
	$id = $_GET['post_id'];
	$user_id = $_GET['user_id']; //from_user_id
	
	$query1 = "UPDATE posts SET upvotes = upvotes + 1 WHERE post_id = '$id'";
	$query2 = "INSERT INTO likes(`post_id`, `user_id`) VALUES ('$id', '$user_id')";
	
	//if(mysqli_query($connection, $query2)){
	$res = mysqli_query($connection, $query2);
	if($res) {
		//echo $res;
		if(mysqli_query($connection, $query1)){
			/*$q = "SELECT upvotes FROM posts WHERE post_id = $id";
			$result = mysqli_query($connection, $q);
			if ($result) {
				while($row = mysqli_fetch_assoc($result)) {
					echo $row['upvotes']. " Likes";
				}
			}*/
			echo "Liked";
		}
	} else {

		$query1 = "UPDATE posts SET upvotes = upvotes - 1 WHERE post_id = '$id'";
		$query2 = "DELETE FROM likes WHERE post_id = '$id' AND user_id = '$user_id' ";
		//$q = "SELECT upvotes FROM posts WHERE post_id = '$id'";
		$result = mysqli_query($connection, $query1);
		if ($result) {
			$res = mysqli_query($connection, $query2);
			if($res) {
				echo "Unliked";
			}
		} else {
			echo "else else";
		}
	}
	
	mysqli_close($connection);