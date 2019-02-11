<?php include_once 'config/init.php';

	$user_id = $_GET['user_id'];

	$user_class_obj = new User;

	$res = $user_class_obj->updateLoginStatus($user_id, 0);

	if($res) {
	
		echo "Successful";
		
		session_unset();

	} else {

		echo "Some error occurred. Try again.";
	}

	//redirect('login', 'Signed out', 'success');