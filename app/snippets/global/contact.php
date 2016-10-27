<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Contact Us - Enviro Management Corp | www.emcbham.com/consulting</title>
	<meta name="keywords" content="emc birmingham, enviro management corp, waste water treatment, environmental consulting firm, laboratory testing">
	<meta name="description" content="EMC is an environmental consulting firm specializing in waste water treatment and laboratory testing proudly serving Alabama and surrounding Southeastern states since 1989.">
	<meta name="Author" content="Phillip Sanford [www.phillipsanford.com]">
	<?php include_once 'snippets/includes/head-tags.php'; ?>
</head>

	<body class="smoothscroll">

		<div id="wrapper">

			<?php
				include_once 'snippets/includes/navbar.php';
			?>

			<!-- GOOGLE MAP -->
			<div id="gmap" class="grayscale"><!-- map container --></div>
			<script type="text/javascript">
				var	$googlemap_latitude 	= -37.812344,
					$googlemap_longitude	= 144.968900,
					$googlemap_zoom			= 13;
			</script>
			<!-- /GOOGLE MAP -->

			<!-- CONTENT -->
			<section>
				<div class="container">

					<div class="row">

						<!-- FORM -->
						<div class="col-md-8">

							<h3>Need a Quote? Have a Question? <strong>Contact us</strong> Today!</h3>

							<!-- Alert -->
							<div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<span id="_msg_txt_"><strong>Thank You!</strong> Your message successfully sent!</span>
							</div><!-- /Alert -->

							<form id="contactForm" action="php/contact.php" method="post">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Full Name *</label>
											<input required type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
										</div>
										<div class="col-md-6">
											<label>E-mail Address *</label>
											<input required type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea required maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_comment" id="contact_comment"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input class="hidden" type="text" name="captcha" id="captcha" value="" /><!-- keep it hidden -->
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" id="contact_submit" />
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-4">

							<h2>Visit Us</h2>

							<p>
								Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
							</p>

							<div class="divider half-margins"><!-- divider --></div>

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City Name, Country</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
							</p>

							<div class="divider half-margins"><!-- divider --></div>

							<h4 class="font300">Business Hours</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
								<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
								<span class="block"><strong>Sunday:</strong> Closed</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- /CONTENT -->




			<?php include_once 'snippets/includes/footer.php'; ?>

			<a href="#" id="toTop"></a>

		</div><!--#wrapper -->

		<?php include_once 'snippets/includes/script-tags.php'; ?>

	</body>

</html>
