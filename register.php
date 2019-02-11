<?php include_once 'config/init.php'; 

	$user_class_obj = new User;
		
		$user = array();

		$file_upload = false;
		$db_img_link = "";

		if(isset($_FILES['image'])){

			$uploadOK = false;

			if(!getimagesize($_FILES['image']['tmp_name'])) {
				$uploadOK = false;
				echo "File is not an image";
			} else {
				$uploadOK = true;
			}

			$target_directory = "images/user_images/";
			$target_file = $target_directory.$_POST['username']."_".basename($_FILES['image']['name']);
			$db_img_link = "images/user_images/".$_POST['username']."_".basename($_FILES['image']['name']);
			
			if(file_exists($target_file)) {
				$uploadOK = false;
				echo "File already exists";
				exit(0);
			}

			if($_FILES['image']['size'] > 3145728) {
				$uploadOK = false;
				echo "File size greater than 3MB";
				exit(0);
			}

			if($uploadOK) {
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
					$file_upload = true;
					echo "Upload Successful"; 
				} else {
					echo "File could not be uploaded";
				}
			}
			
		} else {
			$db_img_link = "images/user_images/default.png";
		}

		//echo $file_upload;

		$user['First Name'] = $_POST['firstName'];
		$user['Last Name'] = $_POST['lastName'];
		$user['Username'] = $_POST['username'];
		$user['Email'] = $_POST['email'];
		$user['Password'] = $_POST['password'];
		$user['Gender'] = $_POST['gender'];
		$user['Profile_img'] = $db_img_link;

		$date=date_create();
		$datetime = date_timestamp_get($date);
		$user['User_id'] = hash("fnv1a64", $user['Username'].$datetime.$user['Email']);
		
		if($user_class_obj->register($user)) {			
			echo "Success";
		} else {
			echo "Failure";
		}
	