<?php include_once 'config/init.php'; 

 	/* if(!$_SESSION['user_id']){

		$location = "login";

		redirect($location);

	} */

    if(isset($_SESSION['user_id'])) {
    	$_SESSION['login_status'] = 'TRUE';
    } else {
    	$_SESSION['login_status'] = 'FALSE';
    }


	$post = new Post;


	$template = new Template('templates/frontpage-test.php');



	$template->title = 'Floofster';



	//$template->posts = $post->getAllPosts($_SESSION['user_id']); 

	$offset = 0;

	$template->posts = $post->getAllPostsLimit($offset);



	//$template->user_posts = $post->getUserPosts($_SESSION['user_id']);



echo $template;