<?php include_once 'config/init.php'; ?>

<?php

	$user_class_obj = new User;
	if(isset($_POST['submit'])){
		
		$target_directory = "images/user_images/";
		$target_file = $target_directory.$_POST['username']."_".basename($_FILES['image']['name']);
		if($_FILES['image']['name']){
			$db_img_link = "images/user_images/".$_POST['username']."_".basename($_FILES['image']['name']);
		} else {
			$db_img_link = "images/user_images/default.png";
		}
		//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		$user = array();
		$user['First Name'] = $_POST['firstName'];
		$user['Last Name'] = $_POST['lastName'];
		$user['Username'] = $_POST['username'];
		$user['Email'] = $_POST['email'];
		$user['Password'] = $_POST['password'];
		$user['Gender'] = $_POST['gender'];
		$user['Profile_img'] = $db_img_link;
		
		if($user_class_obj->register($user)) {			
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
				redirect('login', 'Successfully registered', 'success');
			} else {
				redirect('login', 'Successfully registered', 'success');
			}
		} else {
			echo "Failure";
			redirect('register', 'Email or username already in use', 'error');
		}
	}


	$template = new Template('templates/registerform.php');
	$template->title = 'Register';

	echo $template;