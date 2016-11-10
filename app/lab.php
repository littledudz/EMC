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
	<meta name="Author" content="Phillip Sanford [www.phillipsanford.com]">
	<?php include_once 'snippets/global/head-tags.php'; ?>
</head>
<body class="smoothscroll">
    <?php include_once("snippets/global/analyticstracking.php") ?>
    <div id="wrapper">
        <?php include_once 'snippets/global/navbar.php' ?>
        <section class="alternate">
            <div class="container">
                <img class="col-md-12 views-top-photo" id="lab-top-photo" src="support/images/bg-emc-2.jpg">
                <div class="row" id="environmental-testing">
                    <div class="col-md-12">
                        <h2 class="padding-top30"><strong>Environmental</strong> Testing</h2>
                        <p>EMC has provided a full range of environmental testing services for permit holders for over two decades. Samples are analyzed using EPA approved methods for compliance purposes.</p>

                        <div class="col-md-4 text-center">
                            <img class="img-responsive animate_fade_in" src="support/images/bottle-by-stream.jpg" alt="environmental testing">
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <ul class="list-icon spaced check-circle">
                                <li>NPDES Permit Testing</li>
                                <li>SID Permit Testing</li>
                                <li>UIC Permit Testing</li>
                                <li>Organic Analyses: BTEX, Volatiles, Semivolatiles, Chlorinated Pesticides/Herbicides, TTO</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul class="list-icon spaced check-circle">
                                <li>Storm Water Testing</li>
                                <li>Inorganic Testing</li>
                                <li>Groundwater Testing</li>
                                <li>RCRA Analyses: Corrosivity, Reactivity, TCLP, Ignitibility</li>
                            </ul>
                        </div>

                    </div>

                    <!-- <div class="col-md-6 text-center">
                        <img class="img-responsive animate_fade_in" src="support/images/environmental-testing.jpg" alt="environmental testing">
                    </div> -->
                </div>

                <hr>

                <div class="row" id="petroleum-and-jet-fuel">
                    <div class="col-md-12">
                        <h2><strong>Jet Fuel and Diesel</strong> Testing</h2>
                        <p>EMC is recognized for providing reliable petroleum analysis for several terminals in the region, including terminals used by the United States Military and Air Force One.</p>

                        <div class="col-md-2 col-sm-4">
                            <ul class="list-icon spaced check-circle">
                                <li>API Gravity</li>
                                <li>Electrical Conductivity</li>
                                <li>Distillation</li>
                                <li>Copper Strip Corrosion</li>
                                <li>Flash Point</li>
                                <li>Sulfur</li>
                                <li>Kinematic Viscosity</li>
                                <li>Visual Inspection</li>
                                <li>Existent Gum</li>
                                <li>JFTOT</li>
                                <li>Flash Point</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <ul class="list-icon spaced check-circle">
                                <li>MSEP</li>
                                <li>Saybolt Color</li>
                                <li>Filtration</li>
                                <li>Freezing Point</li>
                                <li>Water Reaction</li>
                                <li>FSII</li>
                                <li>Karl Fischer</li>
                                <li>Acidity</li>
                                <li>Aromatics</li>
                                <li>Doctor</li>
                                <li>Smoke Point</li>
                                <li>Ultra Low Sulfur</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <ul class="list-icon spaced check-circle">
                                <li>Naphthalene</li>
                                <li>Heat of Combustion</li>
                                <li>Workmanship</li>
                                <li>Pour Point</li>
                                <li>Carbon Residue</li>
                                <li>Ash</li>
                                <li>Cetane Index</li>
                                <li>ASTM Color</li>
                                <li>Cloud Point</li>
                                <li>Sediment &amp; Water</li>
                                <li>Heat of Combustion</li>
                                <li>ASTM D1655</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <img class="img-responsive animate_fade_in" src="support/images/shutterstock_89021125.jpg" alt="diesel testing">
                        </div>
                    </div> <!-- end .col-md-12 -->
                </div> <!-- end #petroleum-and-jet-fuel -->
                <hr>
                <div class="row" id="product-quality-testing">
                    <div class="col-md-12">
                        <h2><strong>Product Quality</strong> Testing</h2>
        <!-- 							<p>EMC provides product quality testing for many local manufacturing and industrial companies. The integrity of a company’s products is vitally important and we can provide the crucial information necessary to maintain that integrity. Pesticide residue in food products, organic content of automotive tubing, the flash point of jet fuel, and the composition of cement are just a few examples of product quality testing that we routinely perform. If you have a product that needs independent verification, contact us. We’ll be glad to help you any way that we can.</p> -->
                        <p>EMC provides product quality testing for many local manufacturing and industrial companies. Some examples are:</p>
                        
                        <div class="col-md-4 text-center">
                            <img class="img-responsive animate_fade_in" src="support/images/lab-results.jpg" alt="tractor farmer">
                        </div>

                        <div class="col-md-8">
                            <ul class="list-icon spaced check-circle">
                                <li>Pesticide residue in food products</li>
                                <li>Organic content of automotive tubing</li>
                                <li>The flash point of jet fuel</li>
                                <li>The composition of cement</li>
                            </ul>
                        </div>
                    </div> <!-- end .col-md-12 -->
                </div><!-- end .product-quality-testing -->
                <hr>
                <div class="row" id="lab-data">
                    <div class="col-md-12">
                        <h2><strong>Lab Data </strong>Delivery</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-7 col-sm-12">
                                <p>We know getting test results in a timely manner is very important to you. That’s why we developed an electronic system that allows us to post lab data to your website as soon as it’s available. Using our password-protected portal, you can see your test results any time you want. You’ll even have access to historical data. No more lost test reports! Of course, we always mail the hard copies of all test reports as well.</p>
                                <p>We can also prepare <b>The Electronic Discharge Monitoring Reports</b>. After setting you up on the eFile program, we will complete the reports and then when complete, you will receive an email to review the data and submit it directly to ADEM.</p>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <img class="img-responsive animate_fade_in" src="support/images/lab-results.jpg" alt="lab data delivery">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" id="sample-pickup">
                    <div class="col-md-12">
                        <h2><strong>Field Sampling </strong>and Pickup</h2>
                    </div>
                    <div class="col-md-12">
                        <p>EMC has environmental technicians on the road every day providing sampling and sample pickup services in the better half of Alabama. If you collect your own samples, we can pick them up at your convenience. If you want us to collect your samples, we can set up a comprehensive sampling schedule, including composite sampling equipment, if necessary. Regardless of your needs, EMC can provide the services that make your job easier.</p>
                        <p>EMC also provides storm water sampling and testing services. Our technicians are trained in the proper sampling procedures associated with storm water regulations. Reportable samples will be collected and analyzed according to EPA protocols and reported to you on the Discharge Monitoring Reports that have to be submitted to ADEM. In short, EMC can take care of your storm water requirements from start to finish.</p>
                        <p>If you want a price quote on your sampling and testing needs, please call (205-951-3400) or <a href="#" data-toggle="modal" data-target="#ContactFormModal">send us a message</a>.</p>
                    </div>
                </div>
            </div> <!-- end .container -->
        </section>
        <?php include('snippets/global/modal-form.php'); ?>
        <?php include_once 'snippets/global/footer.php'; ?>
        <a href="#" id="toTop"></a>
    </div><!--#wrapper -->
    <?php include_once 'snippets/global/script-tags.php'; ?>
</body>
</html>