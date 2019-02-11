<?php include_once '../config/init.php'; 

$offset = $_GET['offset'];

$post = new Post;

$posts = $post->getAllPostsLimit($offset);

foreach($posts as $post): ?>

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
							
								</div>
							
								<p>
									<?php echo $post->title; ?>
								</p>
							
								<div class="post-thumb">
									<a href="<?php echo $post->post_id; ?>"><img src="<?php echo $post->img; ?>" alt="photo"></a>
								</div>
							
								<div class="post-additional-info inline-items">
							
									<a href="javascript:void(0)" class="post-add-icon inline-items" onclick="flekPsH26oAcE('<?php echo $post->post_id; ?>' )">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span><?php echo $post->upvotes; ?></span>
									</a>
							
									<div class="names-people-likes">
										<a href="#">Jimmy</a>, <a href="#">Andrea</a> and
										<br>47 more liked this
									</div>
							
							
									<div class="comments-shared">
										<a href="<?php echo $post->post_id; ?>" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
											<!-- <span>264</span> -->
										</a>

									</div>
							
							
								</div>
							
								<div class="control-block-button post-control-button">
							
									<a href="javascript:void(0)" class="btn btn-control" onclick="flekPsH26oAcE('<?php echo $post->post_id; ?>')">
										<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
									</a>
							
									<a href="<?php echo $post->post_id; ?>" class="btn btn-control">
										<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</a>
							
								</div>
							
							</article>
						</div>
					</div>

<?php endforeach; ?>