<?php include_once 'config/init.php';



	$post = new Post;

	$post_id = isset($_GET['id']) ? $_GET['id'] : null;

	$singlePost = $post->getPost($post_id);

	$ratio = $singlePost->img_width / $singlePost->img_height;

	if($ratio > 0.80) {

		$template = new Template('templates/single-post-horizontal.php');

	} else {

		$template = new Template('templates/single-post-vertical.php');

	}


	$template->title = $singlePost->title;


	$template->post = $singlePost;


	$template->comments = $post->getComments($post_id);


	echo $template;
