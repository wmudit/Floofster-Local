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


					
					<?php include('../helpers/data.php');	?>
					

				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php' ?>