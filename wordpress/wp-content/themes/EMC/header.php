
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" rel="stylesheet">
		
		<?php include('snippets/global/modal-form-contact-us.php'); ?>
		<?php include('snippets/global/modal-form-get-a-quote.php'); ?>
		<!--<?php wp_login_form(); ?>-->
		<?php wp_head(); ?>
    </head>

	<body class="smoothscroll" id="body">
	<script> $(document).ready(function wp_force_logout() { <?php
		if ( is_user_logged_in() ) {
			wp_destroy_current_session();
			wp_clear_auth_cookie();
			do_action( 'wp_logout' );
		}
	?> }</script>
	<div class="body">
		<header id="header" class="sticky">
			<header class="">
				<nav class="secondNav" id="secondNav-mobile">
					<!-- Logo -->
					<div class="logo-container"><a class="logo" href="http://emcbham.com/"><img id="nav-logo" src="<?php bloginfo('template_directory');?>/support/images/emc-birmingham-logo-dark.jpg" alt="emc-birmingham-logo-iso"></a></div>
					<!-- Nav Info -->
					<div class="nav-info" id="nav-info-mobile">
						<p class="nav-info-text"><a href="https://www.google.com/maps/place/2607+Commerce+Blvd,+Irondale,+AL+35210/@33.544752,-86.6960897,17z/data=!3m1!4b1!4m5!3m4!1s0x888911b12775f7c1:0x2d2df237c1da85d!8m2!3d33.544752!4d-86.693901">2607 Commerce Boulevard</a></p>
						<p class="nav-info-text">Birmingham Al, 35210</p> 
						<p class="nav-info-text"><a href="+12059513400">(205) 951-3400</a></p> 
					</div>
				</nav> 
			</header>
			<!-- Top Nav -->
			<header class="topNav" id="topNav-mobile">
				<!-- Mobile Menu Buttons -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button>
				<a class="call-short btn" id="client-login-short" href="<?php echo wp_login_url(); ?>"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i><p class="call-text">Login</p></a>    
				<!-- Desktop Top Menu -->
				<div class="navbar-collapse nav-main-collapse collapse">
					<nav class="nav-main">
						<div class="wp-top-spacing"></div>
						<ul id="topMain" class="nav nav-pills nav-main">
							<li id="nav-home" class="mega-menu"><a class="nav-tabs-mobile nav-tab-home" id="nav-tab-home-mobile" href="http://emcbham.com/">Home</a></li>
							<li id="nav-blog" class="mega-menu"><a class="nav-tabs-mobile nav-tab-blog" id="nav-tab-blog-mobile" href="http://emcbham.info/">Blog</a></li>
							<li id="nav-services" class="dropdown mega-menu">
								<a class="dropdown-toggle nav-tabs-mobile nav-tab-services" id="nav-tab-services-mobile" href="#">Our Services</a>
								<ul class="dropdown-menu">
									<li id="dropdown-menu-spacing">
										<ul>
											<li><a href="www.emcbham.com/consulting-services-birmingham-al">Consulting Services</a></li>
											<li><a href="www.emcbham.com/lab-field-operations">Field & Laboratory Operations</a></li>
											<li><a href="www.emcbham.com/cooling-tower-birmingham-al">Cooling Tower Water Treatment</a></li>
											<li><a href="www.emcbham.com/septic-cleaning-birmingham-al">Septic Tank & Grease Trap Cleaning</a></li>
											<li><a href="www.emcbham.com/wastewater-treatment-birmingham-al">Wastewater Treatment Plant Operations</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="nav-quote" class="mega-menu"><a class="nav-tabs-mobile nav-tab-quote" id="nav-tab-quote-mobile" href="#" data-toggle="modal" data-target="#QuoteFormModal">Get a Quote!</a></li>
							<li id="nav-contact" class="mega-menu"><a class="nav-tabs-mobile nav-tab-contact" id="nav-tab-contact-mobile" href="#" data-toggle="modal" data-target="#ContactFormModal">Contact Us</a></li>
							<!--<li id="nav-login" class="mega-menu"><a class="nav-tabs-mobile nav-tab-login" id="nav-tab-login-mobile" href="http://emcbham.info/">Client Login</a></li>-->
						</ul>
						<div class="wp-login">
							<?php
							if ( ! is_user_logged_in() ) {
								$args = array(
									'redirect' => admin_url(), 
									'form_id' => 'wp-login'
								);
								wp_login_form( $args );
							}
							?>
						</div>
					</nav>
				</div>
			</header>
		</header>