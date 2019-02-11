<?php include_once 'config/init.php';

	if(!$_SESSION['user_id']){
		$location = "login";
		redirect($location);
	}

	$adopt_class_obj = new Adopt;

	$template = new Template('templates/adoptionpage.php');

	$template->title = 'Adopt a buddy';

	$template->adoption_posts = $adopt_class_obj->getAdoptionPosts();

echo $template;