<div class="modal fade" id="ContactFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fill out the form below and someone will contact you soon.</h4>
      </div>

      <div class="modal-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="form-group col-md-6">
                <label for="sendername">Name</label>
                <input type="text" class="form-control" id="sendername" name="sendername" placeholder="John Smith" required>
            </div>
						<div class="form-group col-md-6">
								<label for="companyname">Company Name</label>
								<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" required>
						</div>
						<div class="form-group col-md-6">
                <label for="senderemail">Email address</label>
                <input type="text" class="form-control" id="senderemail" name="senderemail" placeholder="j.smith@company.com" required>
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
								<label for="details">Message</label>
								<textarea class="form-control" id="details" name="details" rows="6" required></textarea>
						</div>

						<div class="col-md-12">
								<div class="g-recaptcha" data-sitekey="6LdOfgsUAAAAAJ8tlbq4odVu67k3GwOv6hSN5o3D"></div><br>   <!--6LdZdygTAAAAAAtJxXG51pNFnPSIl4q9Bim-WWdy -->
								<button type="submit" class="btn btn-primary col-xs-12 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-0">Submit</button><br><br><br>
						</div>
				</form>
      </div>
    </div>
  </div>
</div>		