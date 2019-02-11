<?php include 'includes/header.php' ?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  	<!-- The Grid -->
  	<div class="w3-row">

    <!-- Left Column -->
    <div class="w3-col m3">
     	
     	<?php if (isset($_SESSION['user_id'])) { ?>
     	
      	<!-- Profile -->
      	<div class="w3-card-2 w3-round w3-white">
        	<div class="w3-container">
         		<h4 class="w3-center">My Profile</h4>
         		<p class="w3-center"><img src="<?php echo $_SESSION['profile_img'] ?>" class="w3-circle" style="height:124px;width:124px" alt="No profile img"></p>
         		<hr>
         		<p><i class="fa fa-hand-o-right fa-fw w3-margin-right w3-text-theme" title="Username"></i><?php echo $_SESSION['username'] ?> </p>
         		<p><i class="fa fa-user-o fa-fw w3-margin-right w3-text-theme" title="Name"></i><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></p>
         		<p><i class="fa fa-envelope-o fa-fw w3-margin-right w3-text-theme" title="Email"></i><?php echo $_SESSION['email'] ?></p>
        	</div>
      	</div>
      	<br>
      	
        
        <!--My Posts -->
        <div class="w3-card w3-round w3-white">
        	<div class="w3-container">
        		<h4 id="posts_heading" class="w3-center">My Posts</h4>
        		<?php foreach($user_posts as $user_post): ?>
        		<div class="w3-half col-xs-6" style="padding: 5px">
        			<a href="post?id=<?php echo $user_post->post_id; ?>"><img class="w3-margin-bottom" src="<?php echo $user_post->img; ?>" style="width: 100%; height: 150px;"></a>
        		</div>
        		<?php endforeach; ?>
        	</div>
        </div>
        <br>
        
        <?php }
        else { 
            echo "&nbsp";
            
        }?>

        <!-- Alert Box -->
      	<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        	<span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          		<i class="fa fa-remove"></i>
        	</span>
        	<br>
        	<p><strong>Hey!</strong></p>
        	<p>Share your crazy pet stories with everyone.</p>
      	</div>
    
    <!-- End Left Column -->
	</div>
        
    <!-- Middle Column -->
    <div class="w3-col m6">
        <div class="w3-row-padding">
        	<div class="w3-col m12">

					

					<div class="w3-card-2 w3-round w3-white">
            		<div class="w3-container w3-padding">
              		<h4 class="w3-opacity" style="float: left ">Got something to share?</h4>
              		<button type="button" class="w3-button" data-toggle="collapse" data-target="#post" style="float: right"><i class="fa fa-angle-down"></i></button>
              		<div class="collapse" id="post" style="padding-top: 50px ">
              			<form method="post" action="helpers/post" enctype="multipart/form-data">
              				<div class="form-group">
    							<input type="text" class="form-control" id="title" placeholder="Title" name="title">
  							</div>
             				<div class="form-group">
    							<input type="text" class="form-control" id="description" placeholder="Description (optional)" name="description">
  							</div>
             				<div class="form-group">
    							<input type="file" class="form-control" id="image" name="image" style="height: auto">
  							</div>
             				<input type="number" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" style="display: none">
              				<button type="submit" class="w3-button w3-theme" name="submit"><i class="fa fa-pencil">&nbsp;Post</i></button>
              			</form>
              		</div>
					</div>
          		</div>
        	</div>
		</div>
      	
      	<?php foreach($posts as $post): ?>
      	<div class="w3-container w3-card-2 w3-white w3-round w3-margin"> <!-- onClick="check_like(<?php echo $post->post_id; ?>, <?php echo $_SESSION['user_id']; ?>)" -->
      	<br>
        	<img src="<?php echo $post->profile_img ?>" alt="No profile image" class="w3-left w3-circle w3-margin-right" style="width:60px; height:60px;">
        	<span class="w3-right w3-opacity"><?php echo $post->timestamp; ?></span>
        	<h4><?php echo $post->username; ?></h4><br>
        	<hr class="w3-clear">
        	<h4><a href="post?id=<?php echo $post->post_id; ?>" style="text-decoration: none; color: black;"><?php echo $post->title; ?></a></h4>
		
        	<a href="post?id=<?php echo $post->post_id; ?>"><img src="<?php echo $post->img; ?>" style="width:100%; max-height: -webkit-fill-available;" class="w3-margin-bottom"></a>
        	<p id="likes<?php echo $post->post_id; ?>" ><?php echo $post->upvotes; ?> Likes</p>
        
        	
        	<button id="like_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d1 w3-margin-bottom like-button" style="display: inline" onclick="opennn()"><i class="fa fa-thumbs-up"></i></button> <!-- onClick="like(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" -->
        	
        	<button id="dislike_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d2 w3-margin-bottom" style="display: none"><i class="fa fa-thumbs-down"></i></button><!--  onClick="dislike(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" -->
        	
     	
		
			<a href="post?id=<?php echo $post->post_id; ?>" style="text-decoration:none;"><button id="comment_button" type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-comment" aria-hidden="true"></i></button></a>
     		
     		
     		<div class="modal fade" id="signInModal" role="dialog" aria-labelledby="Sign in" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="display: block;">
								<div class="modal-header">
									<h2 class="form-signin-heading" style="color: #007bff">Sign In</h2>
									<button type="button" class="close" data-dismiss="modal"
										aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-signin" method="post" action="login.php">
									<div class="form-group">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
									</div>
									<div class="form-group">
										<label for="inputPassword" class="sr-only">Password</label> 
										<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
									</div>
									</form>
									<h5 id="signUpText">Not registered? Sign Up</h5>
								</div>
								<div class="modal-footer">
									<button class="btn btn-lg btn-primary btn-block" type="submit"
										value="Submit" name="submit">Sign in</button>
								</div>
							</div>
						</div>
					</div>
					 <!-- <div class="modal fade" id="registerModal" role="dialog" aria-labelledby="Register" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" id="registerModal" style="display: none;">
								<div class="modal-header">
									<h2 class="form-signin-heading" style="color: #007bff">Register</h2>
									<button type="button" class="close" data-dismiss="modal"
										aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-signin" method="post" action="register.php" enctype="multipart/form-data">
									<div class="form-group">
										<label for="firstName" class="sr-only">First Name</label>
										<input type="text" id="firstName" class="form-control" placeholder="First Name" name="firstName" required autofocus>
										<label for="lastName" class="sr-only">Last Name</label>
										<input type="text" id="lastName" class="form-control" placeholder="Last Name" name="lastName" required > 
									</div>
									<div class="form-group">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
									</div>
									<div class="form-group">
										<label for="username" class="sr-only">Username</label>
										<input type="text" id="username" class="form-control" placeholder="Username" name="username" required >
									</div>
									<div class="form-group">
										<label for="inputPassword" class="sr-only">Password</label> 
										<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
									</div>
									<div class="form-group">
										<label for="profile_img" class="sr-only">Profile image</label>
										<input type="file" id="image" name="image" class="form-control"><br>
									</div>
									<div class="form-group">
										<label for="gender" class="sr-only-focusable">Gender:</label>
										<input type="radio" name="gender" value="male" checked> Male
										<input type="radio" name="gender" value="female"> Female
										<input type="radio" name="gender" value="other"> Other
									</div>
									</form>
									<h5 id="registerText">Already registered? Sign In</h5>
								</div>
								<div class="modal-footer">
									<button class="btn btn-lg btn-primary btn-block" type="submit"
										value="Register" name="register">Register</button>
								</div>
							</div>
							
							
							
						</div>
					</div>-->
     		
     		
      	</div> 
      	<?php endforeach; ?>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

<!--   	<div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        	<p>ADS</p>
      	</div>
      <br> -->
      
      	<div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        	<p data-toggle="collapse" data-target="#bug_form"><i class="fa fa-bug w3-xlarge"></i></p>
        		<div id="bug_form" class="collapse">
        			<p class="w3-margin">Something buggy?<br>Tell us about it</p>
        			<form method="post" action="helpers/bug">
        				<div class="form-group w3-margin">
        					<textarea type="text" class="form-control" id="bugInput" name="bug" rows="3" placeholder="Describe the bug and be as elaborate as you can" required></textarea>
        				</div>
        				<input type="number" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" style="display: none">
        				<button type="submit" class="w3-button w3-theme"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Submit</button>
        			</form>
        		</div>
      	</div>
      
    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>


<?php include 'includes/footer.php' ?>