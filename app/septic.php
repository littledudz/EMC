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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>$( function() { $( "#datepicker" ).datepicker() } ); </script>
</head>
<body class="smoothscroll">
    <?php include_once("snippets/global/analyticstracking.php") ?>
    <div id="wrapper">
        <?php include_once 'snippets/global/navbar.php' ?>
		<div class="container">
			<!-- <div class="septic-header-bar">
				<div class="col-md-5 col-sm-2 call-now">
					<p class="call-full">Call Now: <a href="+12059513400"><strong>(205) 951-3400</strong></a></p>
					<a class="call-short" href="+12059513400"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><p class="call-text">Call Now</p></a> 
				</div>
			</div> -->
		</div>
         <section class="alternate" id="septic-page-top">
            <div class="container">
				<img class="views-top-photo" id="septic-top-photo" src="support/images/septic-truck.jpg">
				<!--<a class="ha-seal" href="http://www.homeadvisor.com/rated.EnviroManagement.56516298.html" style="display: block; margin: 0 auto;"><img alt="Enviro Management Company, Inc. - Reviews on Home Advisor" style="display:block;" src="http://www.homeadvisor.com/images/sp-badges/soap-border.png?sp=56516298&key=4283b6a0c8716f1c51f22f19ad5fcc93" /></a>-->
				<form class="photo-schedule-container" method="GET" action="mailto:littledudz@yahoo.com" enctype="text/plain">
					<p class="col-md-12 schedule-title"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service Online</p>
					<p class="col-md-12 schedule-subtitle">Select Preferred Time & Date</p>
					<input type="text" id="datepicker" name="date" placeholder="Select Date" required>
					<input type="text" id="schedule-phone" name="phone" placeholder="Contact Phone #" required>
					<input type="text" id="schedule-address" name="address" placeholder="Site Address" required>
					<select name="time" required>
						<option value="Morning">Morning (8am-12pm)</option>
						<option value="worofmouth">Afternoon (12pm-4pm)</option>
						<option value="homeadvisor">Evening (4pm-8pm)</option>
					</select>
					<button class="btn schedule-button" type="submit" value="Send">Schedule Service</button>
				</form> <!-- end .photo-schedule-container -->
				<script>
					var form = document.getElementsByClassName('photo-schedule-container')[0];
					form.addEventListener('submit',contact,false);
					function contact(e) {
						e.preventDefault();
						var target = e.target || e.srcElement;
						var i = 0;
						var message = '';
						for (i = 0; i < target.length; ++i) {
							if (target[i].type != 'text' && target[i].type != 'input') { continue; }
							message += target[i].name + ': ' + target[i].value + "\r\n";
						}
						target.elements["body"].value = message;
						this.submit();
					}
				</script>
				<a class="btn second-button" data-toggle="modal" data-target="#ScheduleFormModal">Schedule Service</a>
				<div class="text-content-container">
					<h2 class="page-titles">Septic Tank & Grease Trap Cleaning</h2>
					<h3 class="col-md-12 counties">Servicing Jefferson, Shelby and St. Clair Counties</h3>
					<div class="col-md-9 col-sm-8" style="border-right: 1px solid #EEE;">
						<p>sfgfgedrgergerg fdfbvdbbdvbdbvdggr dsdfbddvvd sfvdffbvdfdfbvdfbvdf vfddfdgd gddrdgr fdbtergeer gregregvreggvreg egerggerggerg ervgreggergev vbervgvergverr ergvergrg ffcvfesefew frfrewffwre wvadvw elgergheorhg ergheroighoireh egoeirhgoierhgoihergie ergheroigheroigh egrogheroigheirhg ergerighieorgherheuigh ewrghrgheorhgewiu hvhreoher dbchbvhe wsvbvberuf wvrwverwern ervenerv ernrnovr nerner nnergregnrognr eerg ergerog ergerg egier greguergeruhg eriergergerhg uigger hg hgerghgerghiu ghgeriggugiueggehregrhghg giuerh uhvkjdvkjvbre erberukv bvbdvkbevbb rbervebvervbvbviurbiberuiv bvbbviubvirurriereb vebrv rbebvvbberbrrebvehrbvhbvehr r  fff vvherveue bv erbu</p>
						<h3 class="septic-symptoms">Symptoms Indicating Your System Needs To Be Pumped</h3>
						<div class="col-md-6 col-sm-6">
							<p class="bullet-title">Indoors</p>
							<ul class="list-icon spaced check-circle septic-bullets">
								<li>water back-up through plumbing</li>
								<li>fluctuating levels in the toilets</li>
								<li>gurgling in sinks & toilets</li>
								<li>slow draining</li>
								<li>odors</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6">
							<p class="bullet-title">Outdoors</p>
							<ul class="list-icon spaced check-circle septic-bullets">
								<li>sunken ground around disposal area</li>
								<li>wetspot in disposal area</li>
								<li>sewage backups</li>
								<li>tall green grass</li>
								<li>odors</li>
							</ul>
						</div>
						<p>ergergnerjerb bferrebfvebferf wfiuwfrfewbfcewif rfhuerwfberuifger wvferiufheri rgergjerigjier egeriogjerijegeio jperjgrepigejgperjgp ejitejhitejhpietjhieo ergierhgeiorihgveoirhv ergheroihgioerhgoierhg egierhgiherigrhoergh eerigheroihgeoirhgerog erpgjerpijgeprijgio ervguehriughe erghveruihgvieurghru hriuh bf herbvherbfhebrhfbfhfb bh ehbvrbeubvuere yefrferyegef yerre ryereguygfy rgyeruyferuyf reuyfg eryvfvbehv beuvererveur ergryegreyugvyer egyergfyu ergfruery euyeg eruyg eryg yeurg yureg feruyg eugberfbreerbfhr bfrrebbferbbb errbgreuhgierjbg ererbfrehbgregegre</p>
						<h3 class="septic-symptoms">What Are All of the Services That We Provide?</h3>
						<div class="col-md-6 col-sm-6">
							<ul class="list-icon spaced check-circle septic-bullets">
								<li>edfcwefcw</li>
								<li>wefwefcwef</li>
								<li>wefwefce</li>
								<li>wefcwefwe</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="list-icon spaced check-circle septic-bullets">
								<li>edfcwefcw</li>
								<li>wefwefcwef</li>
								<li>wefwefce</li>
								<li>wefcwefwe</li>
							</ul>
						</div>
						<p>ergergnerjerb bferrebfvebferf wfiuwfrfewbfcewif rfhuerwfberuifger wvferiufheri rgergjerigjier egeriogjerijegeio jperjgrepigejgperjgp ejitejhitejhpietjhieo ergierhgeiorihgveoirhv ergheroihgioerhgoierhg egierhgiherigrhoergh eerigheroihgeoirhgerog erpgjerpijgeprijgio ervguehriughe erghveruihgvieurghru hriuh bf herbvherbfhebrhfbfhfb bh ehbvrbeubvuere yefrferyegef yerre ryereguygfy rgyeruyferuyf reuyfg eryvfvbehv beuvererveur ergryegreyugvyer egyergfyu ergfruery euyeg eruyg eryg yeurg yureg feruyg eugberfbreerbfhr bfrrebbferbbb errbgreuhgierjbg ererbfrehbgregegre</p>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="coupon">
							<div class="half-coupon col-md-12">
								<p class="coupon-text coupon-money ">$25.00 off</p>
								<p class="coupon-text coupon-main">Septic Tank</p>
								<p class="coupon-text coupon-main">Cleaning</p>
								<p class="coupon-text coupon-septic">Septic lid must be uncovered.</p>
								<p class="coupon-text coupon-disclaimer">Not valid with any other coupon. Must provide coupon. Expiration 12/31/2018</p>
							</div>
							<div class="half-coupon col-md-12">
								<p class="coupon-text coupon-money">$25.00 off</p>
								<p class="coupon-text coupon-main">Refer a friend</p>
								<p class="coupon-text coupon-main">and recieve a</p>
								<p class="coupon-text coupon-main">$25.00 rebate.</p>
								<p class="coupon-text coupon-septic">Septic lid must be uncovered.</p>
								<p class="coupon-text coupon-disclaimer">Not valid with any other coupon. Must provide coupon. Expiration 12/31/2018</p>
							</div>
							<div class="half-coupon col-md-12">
								<a href="support/files/Coupon.pdf"><button class="schedule-button" ><i class="fa fa-print" aria-hidden="true"></i> Print Coupon</button></a>
							</div>
						</div>
						<div class="client-buttons col-md-12">
							<a href="#" class="btn btn-primary btn-block">Client Login</a>
							<a href="support/files/ChainofCustody.pdf" target="_blank" class="btn btn-default btn-block">Chain of Custody <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
						</div>
						<a class="ha-review" href="http://www.homeadvisor.com/rated.EnviroManagement.56516298.html">
							<div class="ha-reviews-verticle" style="background: #f1f2f2; border: 1px solid #ccc; border-radius: 3px; padding: 20px 15px 10px; box-sizing: border-box;">
								<img alt="Review Pros" src="//cdn2.homeadvisor.com/images/consumer/home/ha-logo-title.png" width="100%">
								<h2 style="background: #3d4549; color:#fff; margin: 15px -16px; padding: 6px 0 4px; text-align: center; font-family: helvetica, arial, san-serif;">RATINGS & REVIEWS</h2>
								<iframe src="https://www.homeadvisor.com/ratings/embed/iframe/56516298/?orientation=vertical&reviewSort=highest" style="width: 100%; height: 607px; background: transparent;" frameborder="0" scrolling="no"></iframe>
								<a class="btn btn-primary btn-block" id="ha-btn" href="http://www.homeadvisor.com/rated.EnviroManagement.56516298.html">More Reviews</a>
							</div>
						</a>
					</div> <!-- end .col-md-3 -->
				</div> <!-- end .text-content-container -->
			</div> <!-- end .container -->
        </section>
        <?php include('snippets/global/modal-form-contact-us.php'); ?>
		<?php include('snippets/global/modal-form-get-a-quote.php'); ?>
		<?php include('snippets/global/modal-form-schedule.php'); ?>
        <?php include_once 'snippets/global/footer.php'; ?>
        <a href="#" id="toTop"></a>
    </div><!--#wrapper -->
    <?php include_once 'snippets/global/script-tags.php'; ?>
</body>
</html>