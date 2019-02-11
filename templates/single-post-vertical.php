<?php include 'includes/header.php' ?>


<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="clients-grid">

				<div class="row sorting-container" id="clients-grid-1" data-layout="masonry">

					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12  sorting-item">
						<div class="ui-block">

							<div class="row">
								<div class="col-sm-12 col-md-7 col-lg-5 col-xl-5">
							
									<article class="hentry post has-post-thumbnail">
									
										<!-- <div class="post__author author vcard inline-items">
											<img src="img/avatar5-sm.jpg" alt="author">
									
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
												<div class="post__date">
													<time class="published" datetime="2004-07-24T18:18">
														March 8 at 6:42pm
													</time>
												</div>
											</div>
									
										</div>
									
										<p>Hey guys! We are gona be playing this Saturday of <a href="#">The Marina Bar</a> for their new Mystic Deer Party.
											If you wanna hang out and have a really good time, come and join us. We’l be waiting for you!
										</p> -->
									
										<div class="post-thumb">
											<!-- <img src="img/post__thumb1.jpg" alt="photo"> -->
											<img src="<?php echo $post->img; ?>" alt="photo">
										</div>
									
										<!-- <div class="post-additional-info inline-items">
									
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
												<span>49</span>
											</a>
									
											<ul class="friends-harmonic">
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
												<li>
													<a href="#">
														<img src="img/friend-harmonic7.jpg" alt="friend">
													</a>
												</li>
												<li>
													<a href="#">
														<img src="img/friend-harmonic8.jpg" alt="friend">
													</a>
												</li>
												<li>
													<a href="#">
														<img src="img/friend-harmonic11.jpg" alt="friend">
													</a>
												</li>
											</ul>
									
											<div class="names-people-likes">
												<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
												<br>47 more liked this
											</div>
									
									
											<div class="comments-shared">
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
													<span>264</span>
												</a>
									
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
													<span>37</span>
												</a>
											</div>
									
									
										</div> -->
									
									</article>

								</div>
							
								<div class="col-sm-12 col-md-5 col-lg-7 col-xl-7">
							
									<article class="hentry post has-post-thumbnail">
									
										<div class="post__author author vcard inline-items">
											<img src="<?php echo $post->profile_img ?>" alt="author">
									
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#"><?php echo $post->username; ?></a>
												<div class="post__date">
													<time class="published" datetime="2004-07-24T18:18">
														<?php echo $post->timestamp; ?>
													</time>
												</div>
											</div>
									
										</div>
									
										<p><?php echo $post->title; ?>
										</p>
									
										<!-- <div class="post-thumb">
											<img src="img/post__thumb1.jpg" alt="photo">
										</div> -->
									
										<div class="post-additional-info inline-items">
									
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
												<span><?php echo $post->upvotes; ?></span>
											</a>
									
											<ul class="friends-harmonic">
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
												<li>
													<a href="#">
														<img src="img/friend-harmonic7.jpg" alt="friend">
													</a>
												</li>
												<li>
													<a href="#">
														<img src="img/friend-harmonic8.jpg" alt="friend">
													</a>
												</li>
												<li>
													<a href="#">
														<img src="img/friend-harmonic11.jpg" alt="friend">
													</a>
												</li>
											</ul>
									
											<div class="names-people-likes">
												<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
												<br>47 more liked this
											</div>
									
									
											<div class="comments-shared">
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
													<span>264</span>
												</a>
									
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
													<span>37</span>
												</a>
											</div>
								
										</div>
									
									</article>

									<div class="mCustomScrollbar" data-mcs-theme="dark">

										<ul class="comments-list">

											<?php foreach($comments as $comment): ?>
											<li class="comment-item">
												<div class="post__author author vcard inline-items">
													<img src="<?php echo $comment->profile_img; ?>" alt="author">

													<div class="author-date">
														<a class="h6 post__author-name fn" href="#"><?php echo $comment->username; ?></a>
														<div class="post__date">
															<time class="published" datetime="2017-03-24T18:18">
																<?php echo $comment->timestamp; ?>
															</time>
														</div>
													</div>

													<!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a> -->
												
												</div>

												<p><?php echo $comment->comment; ?></p>

												<!-- <a href="#" class="post-add-icon inline-items">
													<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
													<span>8</span>
												</a>
												<a href="#" class="reply">Reply</a> -->
											</li>
											<?php endforeach; ?>

										</ul>
									</div>

									<form class="comment-form inline-items">

										<div class="post__author author vcard inline-items">
											<img src="img/avatar73-sm.jpg" alt="author">
											<div class="form-group with-icon-right ">
												<textarea class="form-control" placeholder="Press Enter to post..." ></textarea>
												<div class="add-options-message">
													<a href="#" class="options-message">
														<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
													</a>
												</div>
											</div>
										</div>

									</form>

								</div>
							</div>

						</div>
					</div>

			</div>
		</div>
	</div>
</div>
</div>

<?php include 'includes/footer_not_index.php' ?>