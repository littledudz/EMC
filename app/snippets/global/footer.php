<!-- FOOTER -->
<footer id="footer">

	<div class="container">

		<div class="row">

			<!-- col #1 -->
			<div class="logo_footer dark col-md-3 col-sm-3">

				<img alt="" src="support/images/emc-birmingham-logo-dark.png" height="50" class="EMC Birmingham logo">

				<p class="block">
					EMC Birmingham<br>
					2607 Commerce Boulevard<br>
					Birmingham, AL 35210<br>
					(205) 951-3400<br><br>
					<a href="http://www.emcbham.com">www.emcbham.com</a>
				</p>

			</div>

			<!-- col #2 -->
			<div class="spaced col-md-9 col-sm-9">

				<h4 id="form">Need a price quote? Fill out the form below.</h4>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

					<div class="form-group col-md-6">
						<label for="senderemail">Email address</label>
						<input type="text" class="form-control" id="senderemail" name="senderemail" placeholder="j.smith@company.com" required>
					</div>
					<div class="form-group col-md-6">
						<label for="sendername">Name</label>
						<input type="text" class="form-control" id="sendername" name="sendername" placeholder="John Smith" required>
					</div>
					<div class="form-group col-md-6">
						<label for="companyname">Company Name</label>
						<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" required>
					</div>
					<div class="form-group col-md-3">
						<label for="senderphone">Phone</label>
						<input type="text" class="form-control" id="senderphone" name="senderphone" data-mask="(999) 999-9999" placeholder="(123) 456-7890" required>
					</div>
					<div class="form-group col-md-3">
						<label for="zip">Zip</label>
						<input type="text" class="form-control" id="zip" name="zip" data-mask="99999" placeholder="35007" required>
					</div>
					<div class="form-group col-md-12">
						<label for="details">Details</label>
						<textarea class="form-control" id="details" name="details" rows="6" required></textarea>
					</div>

					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>

			</div>

		</div>

	</div>

	<hr>

	<div class="copyright">
		<div class="container text-center fsize12">
			All Right Reserved &copy; EMC Birmingham <?php echo date("Y"); ?>. | Site designed &amp; powered by <a href="http://www.phillipsanford.com" target="_blank" title="Got digital strategy? Click here." class="copyright">www.phillipsanford.com</a>
		</div>
	</div>

</footer>
<!--FOOTER -->
