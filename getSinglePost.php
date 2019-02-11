<?php include_once 'config/init.php';

	$id = $_POST['id'];

	$post = new Post;

	$result = $post->getPost($id);

	$comments = $post->getComments($id);

	//print_r($result);

	$json = json_encode(array(
		'post' => $result,
		'comments' => $comments

	));

	echo $json;

	//print $result->post_id;

?>