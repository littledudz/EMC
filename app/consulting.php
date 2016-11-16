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

			<!-- WELCOME -->
			<section>
				<div class="container">
					<img class="col-md-12 views-top-photo" id="consulting-top-photo" src="support/images/bg-emc-1.jpg">
					<div class="row">
						<div class="col-md-12">
							<h2 class="padding-top30"><strong>Consulting</strong> Services</h2>
						</div>
						<div class="col-md-9 col-sm-8" style="border-right: 1px solid #EEE;">
							<p>EMC employs a wide range of capabilities and certifications in compliance with local, state and federal regulations. Maintaining OSHA Standards, Environmental Permitting of Discharges, developing compliance schedules and implementing storm water management plans are just a few examples. If you have environmental or safety issues that need attention, EMC can help.</p>
						</div>
						
						<div class="col-md-3 col-sm-4">
							<a href="#" class="btn btn-primary btn-block">Client Login</a>
							<a href="files/ChainofCustody.pdf" target="_blank" class="btn btn-default btn-block">Chain of Custody <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
						</div>
					</div>

					<div class="col-md-6 col-sm-4">
						<ul class="list-icon spaced check-circle">
							<li>NPDES Permit Applications and Renewals</li>
							<li>SID Permit Applications and Renewals</li>
							<li>UIC Permit Applications and Renewals</li>
							<li>Storm Water Permit Applications and Renewals</li>
						</ul>
					</div>

						<div class="col-md-6 col-sm-4">
							<ul class="list-icon spaced check-circle">
								<li>SPCC Plans</li>
								<li>BMP Plans</li>
								<li>Facility Upgrades including PO4 removal systems</li>
								<li>EDMR Preparation and Submission</li>
							</ul>
						</div>
				</div>
			</section>
			<!--WELCOME -->

			<!-- PREMIUM -->
			<section class="alternate">
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<h2>William "Jay" Mather</h2>

								<ul class="list-icon spaced check-circle">
									<li>Certified Safety Professional (CSP) Board of Certified Safety Professionals, License 17184</li>
									<li>Certified Environmental and Safety Compliance Officer (CESCO) National Registry of Environmental Professionals, License 612376</li>
									<li>Certified Fire and Explosive Investigator (CFEI) National Association of Fire Investigators, License 19339-10834</li>
									<li>Certified Fire Inspector I &amp; II (CFI-II) Alabama Fire College-NFPA &amp; International Code Council (ICC) Certificate # 8393566</li>
									<li>OSHA Authorized Trainer – Construction Industry Department of Labor –OSHA License C 0096957</li>
									<li>OSHA Authorized Trainer – General Industry Department of Labor –OSHA License G 0066111</li>
									<li>Associate Safety Professional (ASP) Board of Certified Safety Professionals, License A6961
									  Professional Development Series  FEMA-Emergency Management Institute</li>
									<li>8 Hour Hazardous Waste Site Supervisor Murray State University and Midwest Consortium, License MR033189SR069</li>
									<li>40 Hour Hazardous Waste Site Worker Murray State University and Midwest Consortium, License MR11138940H09</li>
									<li>3 Hour Final Rule Course Murray State University and Midwest Consortium, License MR0915893AW10</li>
									<li>24 Hour Industrial Emergency Responder University of Louisville and Midwest Consortium, License UL0205912IER07</li>
								</ul>

						</div>

					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>General Safety</h2>
							<p>EMC is recognized for providing reliable petroleum analyses for several terminals in the region, including terminals used by the United States Air Force and Air Force One.</p>

							<div class="col-md-4 col-sm-4">
								<ul class="list-icon spaced check-circle">
									<li>Accident Investigations</li>
									<li>Alabama Drug-Free Workplace Programs  (May Qualify For A 5% Workers Compensation Insurance Discount)</li>
									<li>DOT File Review</li>
									<li>Emergency Response Team</li>
									<li>Hazardous Waste Inspections</li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<ul class="list-icon spaced check-circle">
									<li>Injury and Illness Prevention Program (IIPP)</li>
									<li>Job Hazard Analysis</li>
									<li>Life Safety Code Inspections</li>
									<li>OSHA Authorized Trainer (10 &amp; 30 Hour)– Construction and General industry</li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<ul class="list-icon spaced check-circle">
									<li>Recordkeeping (Form 300 and 300A Logs)</li>
									<li>Personal Protective Equipment Evaluations</li>
									<li>Safety Inspections/Mock OSHA Compliance Audits</li>
									<li>Safety Manual and Policy Development Customized to Fit Your Business</li>
								</ul>
							</div>

						</div>

					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>Training and Education (OSHA Authorized 10 &amp; 30 Hour Trainer) </h2>
							<div class="col-md-4">
								<ul class="list-icon spaced check-circle">
									<li>Bloodborne Pathogens</li>
									<li>Chemical Safety</li>
									<li>Confined Space</li>
									<li>Fall Protection</li>
									<li>Fire Extinguisher</li>
									<li>First Aid and CPR Certification Training</li>
									<li>Globally Harmonized System of Classification and Labeling of Chemicals (GHS)</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="list-icon spaced check-circle">
									<li>Hazard Communication</li>
									<li>Hearing Conservation</li>
									<li>Lockout/Tagout</li>
									<li>New Employee Orientation</li>
									<li>Powered Industrial Trucks (Forklift, Manlifts, etc.)</li>
									<li>Personal Protective Equipment</li>
									<li>Respiratory Protection</li>
								</ul>
							</div>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>Injury Prevention / Ergonomics (Office and Production Areas)</h2>

							<div class="col-md-6 col-sm-4">
								<ul class="list-icon spaced check-circle">
									<li>Arm, Hand, and Shoulder Injuries</li>
									<li>Back Injuries</li>
									<li>OSHA Log Trend Analysis</li>
									<li>Physical Demand Evaluations</li>
									<li>Work Station Design and Training</li>
								</ul>
							</div>

						</div>

<!--
						<div class="col-md-6 text-center">
							<img class="img-responsive animate_fade_in" src="support/images/demo/desktop.png" alt="image">
						</div>
-->
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>Fire Risk Assessments and Life Safety Management</h2>

								<ul class="list-icon spaced check-circle">
									<li>Site Inspections for Fire Risk Assessments and Life Safety Compliance</li>
									<li>Emergency Evacuation Maps, where required</li>
									<li>Fire Protection Systems Self-Inspections</li>
								</ul>

						</div>

<!--
						<div class="col-md-6 text-center">
							<img class="img-responsive animate_fade_in" src="support/images/demo/desktop.png" alt="image">
						</div>
-->
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>Loss Control Services</h2>

								<ul class="list-icon spaced check-circle">
									<li>Return To Work − Claims Management − Physical Demands Analysis</li>
									<li>DART Rate (Days Away/Restricted or Job Transfer Rate)</li>
									<li>Experience Modifier Rate (EMR)</li>
								</ul>

						</div>

<!--
						<div class="col-md-6 text-center">
							<img class="img-responsive animate_fade_in" src="support/images/demo/desktop.png" alt="image">
						</div>
-->
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h2>Environmental Services</h2>
							<div class="col-md-4">
								<ul class="list-icon spaced check-circle">
									<li>Chemical Inventory</li>
									<li>Develop Environmental Programs</li>
									<li>Waste Profiles</li>
									<li>Hazardous Waste Manifest Management</li>
									<li>Perform Environmental Inspections</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="list-icon spaced check-circle">
									<li>Prepare Client for Regulatory Inspections</li>
									<li>Prepare EPA Tier Report</li>
									<li>Prepare or Update Environmental Permits</li>
									<li>Stormwater Pollution Prevention Plan</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

			</section>
			<!--PREMIUM -->
			
			<?php include('snippets/global/modal-form-contact-us.php'); ?>
			<?php include('snippets/global/modal-form-get-a-quote.php'); ?>
			<?php include_once 'snippets/global/footer.php'; ?>
			<a href="#" id="toTop"></a>
		</div><!--#wrapper -->
		<?php include_once 'snippets/global/script-tags.php'; ?>
	</body>
</html>
