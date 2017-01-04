<div class="modal fade" id="ScheduleFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service</h4>
      </div>
      <div class="modal-body">
                <form class="photo-schedule-container" name="contactform" method="post" action="send_septic_form.php">						
					<input type="text" required="required" maxlength="50" id="schedule-name" name="first_name" placeholder="Name">
					<input type="text" required="required" maxlength="08" id="datepicker" name="last_name" placeholder="Date">
					<input type="text" required="required" maxlength="11" id="schedule-phone" name="email" placeholder="Phone #">
					<input type="text" required="required" maxlength="75" id="schedule-address" name="telephone" placeholder="Site Address">
					<select name="comments" required="required">
						<option value="Morning">Morning (8am-12pm)</option>
						<option value="Afternoon">Afternoon (12pm-4pm)</option>
						<option value="Evening">Evening (4pm-8pm)</option>
					</select>
					<input type="submit" value="Submit" class="btn schedule-button"/>
				</form> 
            </div>
        </div>
    </div>
</div>	