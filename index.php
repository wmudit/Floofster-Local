<?php include_once 'config/init.php'; ?>



<?php



 	/* if(!$_SESSION['user_id']){

		$location = "login";

		redirect($location);

	} */

    if(isset($_SESSION['user_id'])) {
    	$_SESSION['login_status'] = 'TRUE';
    	$user_id = $_SESSION['user_id'];
    } else {
    	$_SESSION['login_status'] = 'FALSE';
    	$user_id = '';
    }


	$post = new Post;


	$template = new Template('templates/frontpage.php');



	$template->title = 'Floofster';

	//$template->posts = $post->getAllPosts($_SESSION['user_id']); 

	//$template->posts = $post->getAllPosts1();

	$template->posts = $post->getAllPostsLimit(0, $user_id);


	//$template->user_posts = $post->getUserPosts($_SESSION['user_id']);



echo $template;