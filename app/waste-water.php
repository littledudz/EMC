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
		}
		
	}



}
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
				<img class="col-md-12 views-top-photo" id="waste-water-top-photo" src="support/images/wastewater-treatment-plant.jpg">
                <div class="row" id="wastewater-treatment">
                    <div class="col-md-12">
                        <h2 class="padding-top30"><strong>Wastewater Treatment Plant</strong> Operations &amp; Maintenance</h2>
                        <h4><b>Operations</b></h4>
                        <p>EMC offers a wide range of wastewater treatment plant operational services. With our State Certified Operators, we can fully operate your plant and take care of all aspects of plant operations, or we can provide part-time operational assistance that will allow you to stay in compliance with ADEM regulations. Either way, EMC’s State Certified Operators can provide the services you need at a price you can afford.</p>
                        <div class="col-md-5 col-sm-12">
                            <img class="img-responsive animate_fade_in" src="support/images/wastewater-treatment-plant.jpg" alt="wastewater treatment plant">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="list-icon spaced check-circle">
                                <li>State-Certified Wastewater Treatment Plant Operators</li>
                                <li>Wastewater Treatment Plant Operations – Full Time or Part Time</li>
                                <li>Equipment Maintenance and Repairs</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul class="list-icon spaced check-circle">
                                <li>Plant Upgrades Including Phosphate Removal</li>
                                <li>Pump Station Troubleshooting</li>
                                <li>Sewer Line Jetting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="col-md-12 half-margins invisible">
                <div class="row">
                    <div class="col-md-7">
                        <h4><b>Maintenance</b></h4>
                        <p>EMC can provide maintenance and repair services on pump stations and other wastewater treatment plant equipment, including sewer jetting. Our maintenance technicians have 25 + years of experience. Repairs to equipment will be handled quickly, professionally and economically. For a price quote on your operational or maintenance needs, please <a href="#" data-toggle="modal" data-target="#ContactFormModal">contact us today</a>!</p>
                    </div>
                    <div class="col-md-5">
                        <h4>Septic System Maintenance and Improvement</h4>
                        <ul class="list-icon spaced check-circle">
                            <li>Pump Care and Replacement</li>
                            <li>Lift Station pump installation</li>
                            <li>Grease Trap Cleaning</li>
                            <li>Sludge Hauling</li>
                        </ul>
                    </div>
        <!--
                    <div class="col-md-6 col-sm-6">
                        <h4>Sludge Disposal, Grease Trap Buildup and Deterioration</h4>
                        <ul class="list-icon spaced check-circle">
                            <li>Maintain Health Standards</li>
                            <li>Document your business' compliance through full maintenance records</li>
                            <li>Save with competitive pricing</li>
                        </ul>
                    </div>
        -->
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