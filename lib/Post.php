<?php





class Post{

	private $db;



	/*public function __construct(){

			$this->db = new D;

	}*/

	

	public function __construct(){

		$this->db = new D();

	}

	

	//Get all posts

	public function getAllPosts($logged_in_user){

		$this->db->query("SELECT *, (SELECT user_id FROM likes WHERE user_id = :logged_in_user AND post_id = posts.post_id) AS like_status FROM posts, users

		WHERE posts.user_id = users.user_id

		ORDER BY timestamp DESC");

		$this->db->bind(':logged_in_user', $logged_in_user);

		$results = $this->db->resultSet();

		return $results;

	}

	
	public function getAllPosts1(){
	    
	    $this->db->query("SELECT * FROM posts, users
	        
		WHERE posts.user_id = users.user_id
	        
		ORDER BY timestamp DESC");
	    
	    //$this->db->bind(':logged_in_user', $logged_in_user);
	    
	    $results = $this->db->resultSet();
	    
	    return $results;
	    
	}
	
	public function getAllPostsLimit($offset, $user_id){

		//$limit = 24;
	    
	    $this->db->query("SELECT *, (SELECT user_id FROM likes WHERE user_id = :logged_in_user AND post_id = posts.post_id) AS like_status FROM posts, users
	        
		WHERE posts.user_id = users.user_id
	        
		ORDER BY timestamp DESC

		LIMIT 24 OFFSET :offset");
	    
	    $this->db->bind(':logged_in_user', $user_id);

	    $this->db->bind(':offset', (int) $offset);
	    
	    $results = $this->db->resultSet();
	    
	    return $results;
	    
	}

	public function getUserPosts($user_id){

		$this->db->query("SELECT post_id, title, img FROM posts WHERE user_id = :user_id ORDER BY timestamp DESC LIMIT 4");

		$this->db->bind(':user_id', $user_id);

		$results = $this->db->resultSet();

		return $results;

	}

	

	public function like($post_id){

		$this->db->query("UPDATE posts SET upvotes = upvotes+1 WHERE post_id = :post_id");

		$this->db->bind(':post_id', $post_id);

		if($this->db->execute()){

			return true;

		} else {

			return false;

		}

	}

	

	public function getPost($post_id) {

		$this->db->query("SELECT * FROM posts, users WHERE posts.post_id = :post_id AND posts.user_id = users.user_id");

		$this->db->bind(':post_id', $post_id);

		$result = $this->db->single();

		return $result;

	}

	

	public function getComments($post_id){

		$this->db->query("SELECT username, profile_img, comment, timestamp FROM comments,users WHERE comments.post_id = :post_id AND comments.user_id = users.user_id");

		$this->db->bind(':post_id', $post_id);

		$result = $this->db->resultSet();

		return $result;

	}

	

}