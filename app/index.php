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

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html ng-app="WebApp">
    <head>
        <meta charset="utf-8">
        <title>Enviro Management Corp - EMC Birmingham | www.emcbham.com</title>
        <meta name="keywords" content="emc birmingham, enviro management corp, waste water treatment, environmental consulting firm, laboratory testing, environmental testing in birmingham alabama, birmingham alabama, water testing, laboratory testing, field sampling, petroleum testing, wastewater treatment facility upgrade">
        <meta name="description" content="EMC is an environmental consulting firm specializing in waste water treatment and laboratory testing, proudly serving Alabama and surrounding Southeastern states since 1989.">
        <meta name="Author" content="Phillip Sanford [www.phillipsanford.com]">
        <script src='https://www.google.com/recaptcha/api.js'></script>
		<?php include_once 'snippets/global/head-tags.php'; ?>
    </head>
    <body class="smoothscroll">
        <?php include_once("snippets/global/analyticstracking.php") ?>
        <div class="website-container">
            <?php include_once 'snippets/global/navbar.php'; ?>
            <?php include_once 'snippets/views/home.php'; ?>
            <?php include_once 'snippets/global/footer.php'; ?>
        </div>
        <?php include('snippets/global/modal-form.php'); ?>
		<?php include_once 'snippets/global/script-tags.php'; ?>
    </body>
</html>