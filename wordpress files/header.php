<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <!--=== TITLE ===-->  
    <!--<title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>-->
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>

     
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>
 
<!-- HERE GOES YOUR HEADER MARKUP, LIKE LOGO, MENU, SOCIAL ICONS AND MORE -->
<header id="header" class="sticky">
	<!-- Top Nav -->
	<header id="topNav" class="translucent bordered">
		<!-- Logo -->
		<a class="logo" href="/Projects/EMC/app/index.php"><img src="support/images/emc-birmingham-logo-iso.png" alt="emc-birmingham-logo-iso" height="50"></a>
		<!-- Mobile Menu Button -->
		<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button>
		<a class="call-short btn" href="+12059513400"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><p class="call-text">Call Now</p></a> 
		<div class="navbar-collapse nav-main-collapse collapse">
			<nav class="nav-main">
				<ul id="topMain" class="nav nav-pills nav-main"><!-- add "white" class if you want white menu text color-->
					<li class="mega-menu"><a href="/Projects/EMC/app/">Home</a></li>
					<li class="dropdown mega-menu">
						<a class="dropdown-toggle" href="#">Our Services</a>
						<ul class="dropdown-menu">
							<li id="dropdown-menu-spacing">
								<ul>
									<li ><a href="/Projects/EMC/app/consulting.php">Consulting Services</a></li>
									<li><a href="/Projects/EMC/app/lab.php">Field & Laboratory Operations</a></li>
									<li><a href="/Projects/EMC/app/cooling-tower.php">Cooling Tower Water Treatment</a></li>
									<li><a href="/Projects/EMC/app/septic.php">Septic Tank & Grease Trap Cleaning</a></li>
									<li><a href="/Projects/EMC/app/waste-water.php">Wastewater Treatment Plant Operations</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Client Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#QuoteFormModal">Get a Quote!</a></li>
					<li><a href="#" data-toggle="modal" data-target="#ContactFormModal">Contact Us</a></li>
					<li><a href="+12059513400">Call Us!</a></li>
				</ul>
			</nav>
		</div>
	</header>
</header>
 </body>
<!-- DON'T FORGET TO CLOSE THE BODY TAG ON footer.php FILE -->