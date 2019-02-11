<?php include 'includes/header.php' ?>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

	<div class="w3-row-padding w3-padding-16" style="padding-left: 16px">
		<h3>Adopt a pet today</h3>
	</div>
  
   <div class="w3-row-padding">
        	<div class="w3-col m12" style="width: auto; margin-left: -8px" >
          		<div class="w3-card-2 w3-round w3-white">
            		<div class="w3-container w3-padding">
              			<h4 class="w3-opacity" style="float: left">Have a pet for adoption?</h4>
              			<!--<p contenteditable="true" class="w3-border w3-padding"></p>-->
              			<!--<button type="button" class="w3-button w3-theme" style="margin-bottom: 5px" data-toggle="collapse" data-target="#adoption"><i class="fa fa-pencil"></i> &nbsp;Tell us about it</button>-->
              			<button type="button" class="w3-button" data-toggle="collapse" data-target="#adoption" style="float: right"><i class="fa fa-angle-down"></i></button>
              			<div class="collapse" id="adoption" style="padding-top: 50px ">
              				<form method="post" action="helpers/adoption_post.php" enctype="multipart/form-data">
              					<small class="form-text text-muted">Your email will be shown in the adoption post that you create for other people to contact you</small><hr>
              					<div class="form-group">
    								<label for="Name">Name</label>
    								<input type="text" class="form-control" id="NameInput" name="Name">
  								</div>
  								<div class="form-group">
    								<label for="Breed">Breed</label>
    								<input type="text" class="form-control" id="BreedInput" name="Breed">
  								</div>
  								<div class="form-group">
    								<label for="Age">Age</label>
    								<input type="number" class="form-control" id="AgeInput" name="Age">
  								</div>
  								<div class="form-group">
    								<label for="Gender">Gender</label>
    								<input type="text" class="form-control" id="GenderInput" name="Gender">
  								</div>
  								<div class="form-group">
    								<label for="City">City</label>
    								<input type="text" class="form-control" id="CityInput" name="City">
  								</div>
  								<div class="form-group">
    								<label for="Description">Desription</label>
    								<textarea type="text" class="form-control" id="DescriptionInput" name="Description"></textarea>
  								</div>
  								<div class="form-group">
    								<label for="Image">Image</label>
    								<input type="file" class="form-control-file" id="ImageInput" name="Image">
  								</div>
  								<input type="number" name="User_id" value="<?php echo $_SESSION['user_id']; ?>" style="display: none">
  								<button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Tell us about it</button>
							</form>
              			</div>
            		</div>
          		</div>
        	</div>
      	</div>
      	
      	<?php if($adoption_posts) { ?>
      		<div class="w3-row-padding w3-padding-16 w3-center" style="display: inline">
      		<?php foreach($adoption_posts as $post): ?>
				<div class="w3-card-2 w3-round w3-white w3-third">
    			<img src="<?php echo $post->image; ?>" alt="Image not found" style="width: 100%; padding-top: 5px;">
    			<h3><?php echo $post->title; ?></h3>
    			<!--<p><?php echo $post->description; ?></p>-->
				</div>	
		<?php endforeach; ?>
		</div>
		<?php } else { ?>
			<div class="container w3-row-padding w3-padding-16">
				No pets available for adoption right now
			</div>
		<?php } ?>