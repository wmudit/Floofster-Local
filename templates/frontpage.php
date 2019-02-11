<?php include 'includes/header.php' ?>

<div class="container">
	<div class="row">

		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">


			<!-- <div class="ui-block">
				<div class="news-feed-form">
					<div class="tab-content">
						<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
							<form>
								<div class="author-thumb">
									<img src="img/author-page.jpg" alt="author">
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share something</label>
									<textarea class="form-control" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
										<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
									</a>
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
									</a>
				
									<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
										<svg class="olymp-small-pin-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
									</a>
				
									<button class="btn btn-primary btn-md-2">Post</button>
									<button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>
				
								</div>
				
							</form>
						</div>
					</div>
				</div>
			</div> -->



			<div class="clients-grid">
				<div class="row sorting-container" id="clients-grid-1" data-layout="masonry">

					<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 sorting-item">
						<div class="ui-block">
							<div class="news-feed-form">
								<div class="tab-content">
									<div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
										<form>
											<div class="author-thumb">
												<img src="img/author-page.jpg" alt="author">
											</div>
											<div class="form-group with-icon label-floating is-empty">
												<label class="control-label">Share something</label>
												<textarea class="form-control" placeholder=""></textarea>
											</div>
											<div class="add-options-message">
												<a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
													<svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
												</a>		
												<button class="btn btn-primary btn-md-2">Post</button>
											</div>			
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>


					
					<?php foreach($posts as $post): ?>

					<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6  sorting-item">

						<div class="ui-block">
							
							<article class="hentry post has-post-thumbnail">
							
								<div class="post__author author vcard inline-items">
									<img src="<?php echo $post->profile_img; ?>" alt="<?php echo $post->username; ?>">
							
									<div class="author-date">
										<a class="h6 post__author-name fn" href="#"><?php echo $post->username; ?></a>
										<div class="post__date">
											<time class="published" datetime="2004-07-24T18:18">
												<?php echo $post->timestamp; ?>
											</time>
										</div>
									</div>
							
									<!-- <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Post</a>
											</li>
											<li>
												<a href="#">Delete Post</a>
											</li>
											<li>
												<a href="#">Turn Off Notifications</a>
											</li>
											<li>
												<a href="#">Select as Featured</a>
											</li>
										</ul>
									</div> -->
							
								</div>
							
								<p>
									<?php echo $post->title; ?>
								</p>
							
								<div class="post-thumb">
									<a href="<?php echo $post->post_id; ?>"><img src="<?php echo $post->img; ?>" alt="photo"></a>
								</div>
							
								<div class="post-additional-info inline-items" id="number">
							
									<a href="javascript:void(0)" class="post-add-icon inline-items <?php if(isset($post->like_status)) echo 'color-active'; ?>" onclick="flekPsH26oAcE('<?php echo $post->post_id; ?>', '<?php if(isset($_SESSION['user_id'])) echo $_SESSION['user_id']; else echo "" ?>' ) id="<?php echo $post->post_id; ?>_a">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span id="<?php echo $post->post_id; ?>"><?php echo $post->upvotes; ?></span>
									</a>
							
									<!-- <ul class="friends-harmonic">
										<li>
											<a href="#">
												<img src="img/friend-harmonic9.jpg" alt="friend">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="img/friend-harmonic10.jpg" alt="friend">
											</a>
										</li>
										<<li>
											<a href="#">
												<img src="img/friend-harmonic7.jpg" alt="friend">
											</a>
										</li> 
									</ul> -->
							
									<div class="names-people-likes">
										<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
										<br>47 more liked this
									</div>
							
							
									<div class="comments-shared">
										<a href="<?php echo $post->post_id; ?>" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<!-- <span>264</span> -->
										</a>
							
										<!-- <a href="#" class="post-add-icon inline-items">
											<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
											<span>37</span>
										</a> -->
									</div>
							
							
								</div>
							
								<div class="control-block-button post-control-button">
							
									<a href="javascript:void(0)" class="btn btn-control" onclick="flekPsH26oAcE('<?php echo $post->post_id; ?>')">
										<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
									</a>
							
									<a href="<?php echo $post->post_id; ?>" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>
							
									<!-- <a href="#" class="btn btn-control">
										<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
									</a> -->
							
								</div>
							
							</article>
						</div>
					</div>

					<?php endforeach; ?>

				</div>
				
				<script type="text/javascript">
					var offset = 0;
				</script>

				<a id="load-more-button" href="javascript:void(0)" class="btn btn-control btn-more" data-load-link="items-to-load.php?offset=" data-container="clients-grid-1" ><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php' ?>