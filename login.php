<?php include_once 'config/init.php'; ?>



<?php

	

	$user_class_obj = new User;



	//if(isset($_POST['submit'])){

		

		$user = array();

		$user['email'] = $_POST['email'];

		$user['password'] = $_POST['password'];

		

		if($user_class_obj->login($user)) {

			$details = $user_class_obj->getuserDetails($user);

			if($details->logged_in == 0) {

				$res = $user_class_obj->updateLoginStatus($details->user_id, 1);

				if($res) {

					$_SESSION['user_id'] = $details->user_id;

					$_SESSION['firstname'] = $details->first_name;

					$_SESSION['lastname'] = $details->last_name;

					$_SESSION['username'] = $details->username;

					$_SESSION['email'] = $details->email;

					$_SESSION['profile_img'] = $details->profile_img;

					echo "Success". $_SESSION['user_id'];

				} else {

					echo "Some error occurred. Try again.";
				}

			}	else {

				echo "Logged in elsewhere";
			}

			//redirect('index', 'Login successful', 'success');

		} else {

			echo "Some error occurred. Try again.";

			//redirect('login', 'Incorrect email or password', 'error');

		}

		

	//}



	//$template = new Template('templates/loginform.php');

	//$template->title = 'Sign In';



	//echo $template;