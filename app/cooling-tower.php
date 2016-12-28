<?php

/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/

// Initialize RECAPTCHA
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
}}}
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Consulting - Enviro Management Corp | www.emcbham.com/consulting</title>
	<meta name="keywords" content="emc birmingham, enviro management corp, waste water treatment, environmental consulting firm, laboratory testing, environmental testing in birmingham alabama, birmingham alabama, water testing, laboratory testing, field sampling, petroleum testing, wastewater treatment facility upgrade">
	<meta name="description" content="EMC is an environmental consulting firm specializing in waste water treatment and laboratory testing, proudly serving Alabama and surrounding Southeastern states since 1989.">
	<meta name="Author" content="Dudley Dickerson & Phillip Sanford [www.phillipsanford.com]">
	<?php include_once 'snippets/global/head-tags.php'; ?>
</head>
<body class="smoothscroll">
    <?php include_once("snippets/global/analyticstracking.php") ?>
    <div id="wrapper">
        <?php include_once 'snippets/global/navbar.php' ?>
        <section class="alternate">
            <div class="container">
				
				<ul class="top-photo-overlay-container">
					<li class="top-photo-logo"><img src="support/images/emc-birmingham-logo-iso-white.png" alt="emc logo" style="height: 90px;"></li>
					<li class="top-photo-text iso-text">An ISO 9001:2008 Company</li>
					<li class="top-photo-text welcome-text">WELCOME TO</li>
					<li class="top-photo-text enviro-text">Enviro Managament Corp.</li>
					<li class="top-photo-text leader-text">The regional leader in environmental & safety consulting since 1989.</li>
				</ul>
				<img class="col-md-12 views-top-photo" id="cooling-tower-top-photo" src="support/images/cooling-tower.jpg">
                
				<div class="row" id="cooling-tower-water">
                    <h2 class="page-titles page-title-margin" id="cooling-tower-title">Cooling Tower Water Treatment Programs</h2>
					<div class="col-md-9 col-sm-8">
						<p>Regardless of if your system operates continuously or seasonally, you will save money with a water treatment program for your cooling tower. These programs are specifically designed to maximize performance and protect valuable equipment from scale and corrosion.  Another advantage of utilizing a water treatment program is increased efficiency and minimal down time.  This can save you quite a bit of money by not having to pay for unnecessary repairs on your equipment. EMC has the solution and will gladly administer a proficient water treatment program for you. For a price quote on your operational or maintenance needs, <a href="#" data-toggle="modal" data-target="#ContactFormModal">contact EMC today</a>!</p>
					</div>
					<div class="col-md-3 col-sm-4">
						<a href="wp-login.php" class="btn btn-primary btn-block">Client Login</a>
						<a href="files/ChainofCustody.pdf" target="_blank" class="btn btn-default btn-block">Chain of Custody <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
					</div>

					<hr>

                    <div class="col-md-5 col-sm-5" id="cooling-tower-photo">
                        <img class="img-responsive animate_fade_in" src="support/images/stockimage2.jpg" alt="cooling tower">
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="col-md-12">
							<h2>What We Can Do For You</h2>

							<ul class="list-icon spaced check-circle">
								<li>Open and closed loop treatment programs</li>
								<li>Full-service contracts or “pay-as-you-need” chemicals</li>
								<li>Knowledgeable and experienced technicians</li>
								<li>In-house laboratory support</li>
								<li>We can supply water treatment equipment as part of our services</li>
							</ul>
						</div>
                    </div>
                </div>

				<hr> 

				<div class="row">
					<h2 class="col-md-12">Why Are Cooling Towers Needed?</h2>

					<p class="col-md-12">Cooling towers are not just needed in one industry. In fact, there are many different kind of facilities that need a cooling tower for efficient, proper operation. One of the most common is industrial production processes which need a cooling water to keep their machines cool. Refineries, petrochemical plants, food plants, manufacturing facilities, steel mills, chemical processing plants, large buildings, and electric utilities all rely on the cooling water system to do their job. How do water cooling tower systems do this?  They control temperatures and pressures of hot fluids by transferring the heat from these hot fluids into the cooling water. As this happens over time, the cooling water heats up, and it must be either cooled before it can be used again or replaced with fresh, clean water. The cooling system design, effectiveness, and efficiency all depend on the type of process being cooled, the characteristics of the water moving through it, and environmental considerations surrounding the unit. To help maintain the cooling tower, a monitoring and treatment program will need to be implemented for optimal uptime.</p>
				</div>

				<hr>

				<div class="row">
					<h2 class="col-md-12">Why is Monitoring, Control, and Treatment Important?</h2>

					<p class="col-md-12 bottom-p">The cooling system’s operation can directly affect reliability, efficiency, and the cost of any industrial, institutional, or power industry process. Monitoring and maintaining control of corrosion, deposition, microbial growth, and system operation is essential to provide the most amount of uptime for the cooling system. The big step to achieving outstanding uptime is choosing an appropriate treatment program for your water cooling tower solution to minimize system stresses. This process will require regularly scheduled monitoring for your system. It is used to determine treatment effectiveness, to establish the optimum level of treatment that is most cost effective (in respect to energy, water, and chemical usage), and to prevent corrosion from building up in the system.</p>
				</div>
            </div>
        </section>
        <?php include('snippets/global/modal-form-contact-us.php'); ?>
		<?php include('snippets/global/modal-form-get-a-quote.php'); ?>
        <?php include_once 'snippets/global/footer.php'; ?>
        <a href="#" id="toTop"></a>
    </div><!--#wrapper -->
    <?php include_once 'snippets/global/script-tags.php'; ?>
</body>
</html>