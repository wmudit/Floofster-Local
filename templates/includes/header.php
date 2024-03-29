<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php echo $title ?></title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">


</head>
<body>

<!-- Header-BP -->

<header class="header" id="site-header">

	<div class="page-title">
		<!-- <h6>Floofster</h6> -->

		<!-- <div class="logo-wrapper"> -->
			<a href="index.php">
			<!-- <img src="img/floofster-1.png"> -->
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 2000 472" style="margin: 5px 0; enable-background:new 0 0 2000 472;" xml:space="preserve">
			<style type="text/css">
				.st0{fill:none;}
				.st1{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;}
			</style>
			<g>
				<rect y="42.61" class="st0" width="2000" height="676.39"/>
				<path class="st1" d="M140.16,42.6c12.16,0,22.48,0.96,30.96,2.88c8.48,1.92,15.12,3.84,19.92,5.76l-9.12,47.04
					c-4.48-1.6-9.84-3.04-16.08-4.32c-6.24-1.27-13.04-1.92-20.4-1.92c-19.2,0-32.4,5.12-39.6,15.36c-7.2,10.25-10.8,23.52-10.8,39.84
					v16.8h92.16v48.48H95.04v202.56H36.96v-268.8c0-32.64,8.48-58.08,25.44-76.32C79.36,51.72,105.28,42.6,140.16,42.6z M319.2,419.88
					c-17.28-0.32-31.6-2.24-42.96-5.76c-11.36-3.52-20.4-8.56-27.12-15.12c-6.72-6.55-11.45-14.71-14.16-24.48
					c-2.72-9.76-4.08-20.88-4.08-33.36V52.2l58.08-9.6v287.52c0,7.04,0.56,12.96,1.68,17.76c1.12,4.8,3.12,8.88,6,12.24
					c2.88,3.36,6.79,5.92,11.76,7.68c4.96,1.76,11.28,3.12,18.96,4.08L319.2,419.88z"/>
				<path class="st1" d="M601.43,289.32c0,19.84-2.88,37.92-8.64,54.24c-5.76,16.32-13.92,30.24-24.48,41.76
					c-10.56,11.52-23.28,20.48-38.16,26.88c-14.88,6.4-31.28,9.6-49.2,9.6c-17.92,0-34.25-3.2-48.96-9.6
					c-14.72-6.4-27.36-15.36-37.92-26.88c-10.56-11.52-18.8-25.44-24.72-41.76c-5.92-16.32-8.88-34.4-8.88-54.24
					c0-19.84,2.96-37.84,8.88-54c5.92-16.16,14.23-30,24.96-41.52c10.72-11.52,23.44-20.4,38.16-26.64
					c14.71-6.24,30.88-9.36,48.48-9.36c17.6,0,33.84,3.12,48.72,9.36c14.88,6.24,27.6,15.12,38.16,26.64s18.79,25.36,24.72,41.52
					C598.47,251.49,601.43,269.49,601.43,289.32z M541.91,289.32c0-24.96-5.36-44.72-16.08-59.28c-10.73-14.56-25.68-21.84-44.88-21.84
					s-34.16,7.28-44.88,21.84c-10.73,14.56-16.08,34.32-16.08,59.28c0,25.28,5.35,45.28,16.08,60c10.72,14.72,25.68,22.08,44.88,22.08
					s34.15-7.36,44.88-22.08C536.55,334.61,541.91,314.61,541.91,289.32z"/>
				<path class="st1" d="M888.47,289.32c0,19.84-2.88,37.92-8.64,54.24c-5.76,16.32-13.92,30.24-24.48,41.76
					c-10.56,11.52-23.28,20.48-38.16,26.88c-14.88,6.4-31.28,9.6-49.2,9.6c-17.92,0-34.25-3.2-48.96-9.6
					c-14.72-6.4-27.36-15.36-37.92-26.88c-10.56-11.52-18.8-25.44-24.72-41.76c-5.92-16.32-8.88-34.4-8.88-54.24
					c0-19.84,2.96-37.84,8.88-54c5.92-16.16,14.23-30,24.96-41.52c10.72-11.52,23.44-20.4,38.16-26.64
					c14.71-6.24,30.88-9.36,48.48-9.36c17.6,0,33.84,3.12,48.72,9.36c14.88,6.24,27.6,15.12,38.16,26.64s18.79,25.36,24.72,41.52
					C885.51,251.49,888.47,269.49,888.47,289.32z M828.95,289.32c0-24.96-5.36-44.72-16.08-59.28c-10.73-14.56-25.68-21.84-44.88-21.84
					s-34.16,7.28-44.88,21.84c-10.73,14.56-16.08,34.32-16.08,59.28c0,25.28,5.35,45.28,16.08,60c10.72,14.72,25.68,22.08,44.88,22.08
					s34.15-7.36,44.88-22.08C823.59,334.61,828.95,314.61,828.95,289.32z"/>
				<path class="st1" d="M1050.71,42.6c13.44,0,25.27,1.2,35.52,3.6c10.24,2.4,17.92,4.56,23.04,6.48l-11.04,48
					c-5.45-2.56-11.76-4.64-18.96-6.24c-7.2-1.6-14.96-2.4-23.28-2.4c-9.29,0-17.12,1.37-23.52,4.08c-6.41,2.72-11.52,6.48-15.36,11.28
					c-3.84,4.8-6.56,10.64-8.16,17.52c-1.61,6.89-2.4,14.33-2.4,22.32v16.8h91.2v48.48h-91.2v202.56h-58.08v-268.8
					c0-32.32,8.48-57.68,25.44-76.08C990.86,51.81,1016.46,42.6,1050.71,42.6z"/>
				<path class="st1" d="M1203.34,373.32c15.36,0,26.56-1.84,33.6-5.52c7.03-3.68,10.56-10,10.56-18.96c0-8.32-3.76-15.19-11.28-20.64
					c-7.52-5.44-19.92-11.35-37.2-17.76c-10.56-3.84-20.24-7.92-29.04-12.24c-8.81-4.32-16.4-9.36-22.8-15.12
					c-6.4-5.76-11.44-12.72-15.12-20.88c-3.68-8.16-5.52-18.16-5.52-30c0-23.04,8.47-41.2,25.44-54.48
					c16.96-13.27,40-19.92,69.12-19.92c14.72,0,28.8,1.36,42.24,4.08c13.44,2.72,23.52,5.36,30.24,7.92l-10.56,47.04
					c-6.4-2.88-14.56-5.52-24.48-7.92c-9.92-2.4-21.44-3.6-34.56-3.6c-11.84,0-21.44,2-28.8,6c-7.36,4-11.04,10.16-11.04,18.48
					c0,4.16,0.72,7.84,2.16,11.04c1.44,3.2,3.92,6.17,7.44,8.88c3.52,2.72,8.16,5.44,13.92,8.16c5.76,2.72,12.79,5.52,21.12,8.4
					c13.75,5.12,25.44,10.16,35.04,15.12c9.6,4.97,17.52,10.56,23.76,16.8c6.24,6.24,10.8,13.36,13.68,21.36
					c2.88,8,4.32,17.6,4.32,28.8c0,24-8.88,42.17-26.64,54.48c-17.76,12.32-43.13,18.48-76.08,18.48c-22.08,0-39.84-1.85-53.28-5.52
					c-13.44-3.68-22.88-6.64-28.32-8.88l10.08-48.48c8.64,3.52,18.96,6.89,30.96,10.08C1174.3,371.73,1187.98,373.32,1203.34,373.32z"
					/>
				<path class="st1" d="M1356.94,97.8l58.08-9.6v75.84h89.28v48.48h-89.28v102.24c0,20.16,3.2,34.56,9.6,43.2
					c6.4,8.64,17.28,12.96,32.64,12.96c10.56,0,19.92-1.12,28.08-3.36c8.16-2.23,14.64-4.32,19.44-6.24l9.6,46.08
					c-6.72,2.88-15.52,5.84-26.4,8.88c-10.88,3.04-23.69,4.56-38.4,4.56c-17.92,0-32.88-2.4-44.88-7.2c-12-4.8-21.52-11.76-28.56-20.88
					c-7.04-9.12-12-20.16-14.88-33.12c-2.88-12.96-4.32-27.76-4.32-44.4V97.8z"/>
				<path class="st1" d="M1542.22,290.76c0-22.08,3.28-41.44,9.84-58.08c6.55-16.64,15.28-30.48,26.16-41.52
					c10.88-11.04,23.35-19.36,37.44-24.96c14.08-5.6,28.48-8.4,43.2-8.4c34.56,0,61.52,10.72,80.88,32.16
					c19.36,21.44,29.04,53.45,29.04,96c0,3.2-0.08,6.8-0.24,10.8c-0.17,4-0.41,7.6-0.72,10.8h-165.6c1.6,20.16,8.71,35.76,21.36,46.8
					c12.64,11.04,30.96,16.56,54.96,16.56c14.08,0,26.96-1.27,38.64-3.84c11.68-2.56,20.88-5.28,27.6-8.16l7.68,47.52
					c-3.2,1.6-7.61,3.29-13.2,5.04c-5.6,1.76-12,3.36-19.2,4.8c-7.2,1.44-14.96,2.64-23.28,3.6c-8.32,0.96-16.8,1.44-25.44,1.44
					c-22.08,0-41.28-3.29-57.6-9.84c-16.32-6.55-29.76-15.67-40.32-27.36c-10.56-11.68-18.41-25.44-23.52-41.28
					C1544.78,327,1542.22,309.65,1542.22,290.76z M1710.7,264.84c0-7.99-1.13-15.6-3.36-22.8c-2.24-7.2-5.52-13.44-9.84-18.72
					c-4.32-5.28-9.6-9.44-15.84-12.48c-6.24-3.04-13.68-4.56-22.32-4.56c-8.96,0-16.8,1.68-23.52,5.04c-6.72,3.36-12.4,7.76-17.04,13.2
					c-4.64,5.44-8.24,11.69-10.8,18.72c-2.56,7.04-4.32,14.24-5.28,21.6H1710.7z"/>
				<path class="st1" d="M1973.26,216.36c-4.8-1.6-11.45-3.28-19.92-5.04c-8.48-1.76-18.32-2.64-29.52-2.64c-6.4,0-13.2,0.65-20.4,1.92
					c-7.2,1.28-12.24,2.4-15.12,3.36v201.12h-58.08V176.04c11.2-4.15,25.2-8.08,42-11.76c16.8-3.68,35.44-5.52,55.92-5.52
					c3.84,0,8.32,0.24,13.44,0.72c5.11,0.48,10.24,1.13,15.36,1.92c5.12,0.8,10.08,1.76,14.88,2.88c4.8,1.13,8.64,2.16,11.52,3.12
					L1973.26,216.36z"/>
			</g>
			</svg>

			</a>
		<!-- </div> -->
	</div>

	<div class="header-content-wrapper">

		<div class="control-block">

			<a href="javascript:void(0)" id="logout_icon" style="display: block" onclick="fLfXTH7Ch7t0Q('<?php if(isset($_SESSION['user_id'])) echo $_SESSION['user_id']; else echo "" ?>')">
				<svg class="olymp-logout-icon" style="fill: white; margin: 12px 0;"><use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

				<!-- <span>Log Out</span> -->
			</a>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<!-- <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</li>
		</ul> -->
	</div>

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>