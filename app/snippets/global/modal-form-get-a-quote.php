<div class="modal fade" id="QuoteFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fill out the form below and someone will contact you soon.</h4>
      </div>
      
      <div class="modal-body">
		<form name="contactform" method="post" action="send_quote_form.php">
            <div class="form-group col-md-6">
                <label for="sendername">Name</label>
                <input type="text" class="form-control" id="sendername" name="first_name" placeholder="John Smith" required>
            </div>
            <div class="form-group col-md-6">
                <label for="companyname">Company Name</label>
                <input type="text" class="form-control" id="companyname" name="last_name" placeholder="Company Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="senderemail">Email address</label>
                <input type="text" class="form-control" id="senderemail" name="email" placeholder="j.smith@company.com" required>
            </div>
            <div class="form-group col-md-3">
                <label for="senderphone">Phone</label>
                <input type="text" class="form-control" id="senderphone" name="telephone" data-mask="(999) 999-9999" placeholder="(123) 456-7890" required>
            </div>
            <div class="form-group col-md-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" data-mask="99999" placeholder="12345" required>
            </div>
            <div class="form-group col-md-3">
                <label for="typeofwork">Type of Work</label>
                <select name="typeofwork" required>
                    <option value="other">Which Service?</option>
                    <option value="coolingtowerservices">Cooling Tower Services</option>
                    <option value="wastewaterservices">Waste Water Services</option>
                    <option value="septictankservices">Septic Tank Services</option>
                    <option value="consultingservices">Consulting Services</option>
                    <option value="laboratoryservices">Laboratory Services</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="urgency">Urgency</label>
                <select name="urgency" required>
                    <option value="other">How Urgent?</option>
                    <option value="norush">No Rush</option>
                    <option value="urgent">Urgent</option>
                    <option value="veryurgent">Very Urgent</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="howoften">How Often?</label>
                <select name="howoften" placholder ="[select one]" required>
                    <option value="other">How Often?</option>
                    <option value="once">Once</option>
                    <option value="yearly">Yearly</option>
                    <option value="biannually">Bi-Annually</option>
                    <option value="quarterly">Quarterly</option>
                    <option value="monthly">Monthly</option>
                    <option value="whenneeded">When Needed</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="reference">Who Referred You To Us?</label>
                <select name="reference" required>
                    <option value="other">Reference?</option>
                    <option value="worofmouth">Word of Mouth</option>
                    <option value="homeadvisor">Home Advisor</option>
                    <option value="angieslist">Angies List</option>
                    <option value="valpack">Val Pack</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="comments">Any Other Details</label>
                <textarea class="form-control" id="details" name="comments" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="6LdZdygTAAAAAAtJxXG51pNFnPSIl4q9Bim-WWdy"></div><br>   <!--6LdZdygTAAAAAAtJxXG51pNFnPSIl4q9Bim-WWdy -->
                <button type="submit" class="modal-btn-mobile btn btn-primary col-xs-12 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-0">Submit</button><br><br><br>
            </div>
		</form>
      </div>
    </div>
  </div>
</div>		