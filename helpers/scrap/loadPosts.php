<?php include_once 'config/init.php';

if(isset($_GET['offset'])) {

	$offset = $_GET['offset'];

} else {

	echo "Error occurred";

}

$post_obj = new Post;

$posts = $post_obj->getAllPostsLimit($offset);

$json = include('helpers/data.php');

echo json_encode($json);

?>