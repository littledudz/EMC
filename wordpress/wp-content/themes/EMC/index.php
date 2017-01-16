<?php
if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
    var_dump($_POST);
    $secret = "6LdZdygTAAAAAKAnLVbS2XGPHop6S-79xvor3v37";
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
    var_dump($rsp);
    $arr = json_decode($rsp,TRUE);
	if (!empty($_POST)) {
		$senderemail = $_REQUEST["senderemail"];
		$sendername = $_REQUEST["sendername"];
		$sendername = trim($sendername);
		$sendername = htmlspecialchars($sendername);
		$companyname = $_REQUEST["companyname"];
		$companyname = trim($companyname);
		$companyname = htmlspecialchars($companyname);
		$senderphone = $_REQUEST["senderphone"];
		$senderphone = trim($senderphone);
		$zip = $_REQUEST["zip"];
		$zip = trim($zip);
		$details = $_REQUEST["details"];
		$details = trim($details);
		$details = htmlspecialchars($details);
		$message = "
		<html>
			<head>
				<title>EMC Birmingham</title>	
			</head>
			<body>
				<h1>".$companyname." | ".$zip."</h1>
				<p>".$sendername." (".$senderemail." | ".$senderphone.")</p>
				<p>&quot;".$details."&quot;</p>
			</body>
		</html>";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$to = 'christina@emcbham.com';
		$subject = 'EMC Birmingham |  web form: ' . $sendername . "\r\n";
		$headers .= "From: ".$sendername." <".$senderemail.">" . "\r\n";
		$headers .= 'Bcc: maverick2030@gmail.com' . "\r\n";
		$go = mail($to, $subject, stripslashes($message), $headers);	
		if (!$go) {
			$alert = '
				<div class="container" style="z-index: 2000; margin-top: 20px;">
					<div class="col-md-8 col-md-offset-2">
						<div class="alert alert-danger alert-dismissible" role=alert>
							<button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button>
							<div class="text-center">
								<i class="fa fa-check-times fa-4x" aria-hidden="true"></i>
								<h2>Uh Oh...</h2>
								<p>Something weird happened. Try submitting your form again.</p>
							</div>
						</div>
					</div>
				</div>
			';
		    header("refresh:5;url=http://www.emcbham.com");
		}
		else {
			$alert = '
				<div class="container" style="z-index: 2000; margin-top: 20px;">
					<div class="col-md-8 col-md-offset-2">
						<div class="alert alert-success alert-dismissible" role=alert>
							<button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button>
							<div class="text-center">
								<i class="fa fa-check-circle fa-4x" aria-hidden="true"></i>
								<h2>Thank You!</h2>
								<p>We&rsquo;ve received your form and will be getting back in touch with you soon.</p>
							</div>
						</div>
					</div>
				</div>
			';
		    header("refresh:5;url=http://www.emcbham.com");
		}	
	}
}
?>
<?php get_header(); ?>
	<div class="row" id="blog">
		<div class="wp-top-photo col-md-12">
			<ul class="top-photo-overlay-container">
				<li class="wp-photo-logo" id="wp-photo-logo-spacing"><img src="<?php bloginfo('template_directory');?>/support/images/emc-birmingham-logo-iso-white.jpg" alt="emc logo" style="height: 90px;"></li>
				<li class="top-photo-text iso-text">An ISO 9001:2008 Company</li>
				<li class="top-photo-text welcome-text">WELCOME TO</li>
				<li class="top-photo-text enviro-text">Enviro Managament Corp.</li>
				<li class="top-photo-text leader-text">The regional leader in environmental & safety consulting since 1989.</li>
			</ul>
			<img class="col-md-12 views-top-photo" id="lab-top-photo" src="<?php bloginfo('template_directory');?>/support/images/bg-emc-4.jpg" alt="lab">
		</div>
		<div class="col-md-8 blog-main">
			<!-- The Loop - ESSENTIAL TO WORDPRESS - All of your content is generated through a loop - Pulls from content.php-->
			<?php       
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
			<nav><ul class="pager">
				<li><?php next_posts_link( 'Previous' ); ?></li>
				<li><?php previous_posts_link( 'Next' ); ?></li>
			</ul></nav>
			<?php endif; 
			?>
		</div> <!-- end .blog-main -->
		<div class="blog-sidebar"><?php get_sidebar(); ?></div>
	</div> <!-- end .row -->
<?php get_footer(); ?>