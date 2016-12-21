<!-- header.php - Displays the header at the top of every page on your WordPress site. This is the code that generates the menu. -->

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Enviro Management Corp</title>
        <meta name="keywords" content="emc birmingham, enviro management corp, waste water treatment, environmental consulting firm, laboratory testing, environmental testing in birmingham alabama, birmingham alabama, water testing, laboratory testing, field sampling, petroleum testing, wastewater treatment facility upgrade">
        <meta name="description" content="EMC is an environmental consulting firm specializing in waste water treatment and laboratory testing, proudly serving Alabama and surrounding Southeastern states since 1989.">
        <meta name="Author" content="Dudley Dickerson & Phillip Sanford [www.phillipsanford.com]">
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <script src='https://www.google.com/recaptcha/api.js'></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Favicon -->
		<link rel="shortcut icon" href="/wordpress/wp-content/themes/EMC/support/images/emc-birmingham-logo-favicon.jpg">
		<link rel="apple-touch-icon" sizes="180x180" href="/wordpress/wp-content/themes/EMC/support/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="167x167" href="/wordpress/wp-content/themes/EMC/support/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/wordpress/wp-content/themes/EMC/support/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/wordpress/wp-content/themes/EMC/support/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/wordpress/wp-content/themes/EMC/support/images/apple-touch-icon.png">
		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<link href="<?php bloginfo('template_directory');?>/css/global.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/navbar.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/footer.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/animate.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/carousel.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/calendar.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/essentials.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/flexslider.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/layerslider.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/layout.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/views.css" rel="stylesheet">
		
		<?php include('snippets/global/modal-form-contact-us.php'); ?>
		<?php include('snippets/global/modal-form-get-a-quote.php'); ?>
		<!--<?php wp_login_form(); ?>-->
		<?php wp_head(); ?>
    </head>

	<body class="smoothscroll">

		<header id="header" class="sticky">
			<!-- Top Nav -->
			<header id="topNav" class="translucent bordered">
				<!-- Logo -->
				<a class="logo" href="<?php bloginfo( 'wpurl' );?>"><img src="wp-content/themes/EMC/support/images/emc-birmingham-logo-iso.jpg" alt="emc-birmingham-logo-iso" height="50"></a>
				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button>
				<a class="call-short btn" href="+12059513400"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><p class="call-text">Call Now</p></a> 
				<div class="navbar-collapse nav-main-collapse collapse">
					<nav class="nav-main">
						<ul id="topMain" class="nav nav-pills nav-main"><!-- add "white" class if you want white menu text color-->
							<li class="mega-menu"><a href="<?php bloginfo( 'wpurl' );?>">Home</a></li>
							<li class="dropdown mega-menu">
								<a class="dropdown-toggle" href="#">Our Services</a>
								<ul class="dropdown-menu">
									<li id="dropdown-menu-spacing">
										<ul>
											<li><a href="wp-content/themes/EMC/consulting.php">Consulting Services</a></li>
											<li><a href="wp-content/themes/EMC/lab.php">Field & Laboratory Operations</a></li>
											<li><a href="wp-content/themes/EMC/cooling-tower.php">Cooling Tower Water Treatment</a></li>
											<li><a href="wp-content/themes/EMC/septic.php">Septic Tank & Grease Trap Cleaning</a></li>
											<li><a href="wp-content/themes/EMC/waste-water.php">Wastewater Treatment Plant Operations</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="wp-login.php">Client Login</a></li>
							<li><a href="#" data-toggle="modal" data-target="#QuoteFormModal">Get a Quote!</a></li>
							<li><a href="#" data-toggle="modal" data-target="#ContactFormModal">Contact Us</a></li>
							<li><a href="+12059513400">(205) 951-3400</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</header>