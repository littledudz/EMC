<div class="modal fade" id="ScheduleFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service Online</h4>
      </div>
      <div class="modal-body">
                <form class="photo-schedule-container" id='contactus' action="mailto:littledudz@yahoo.com"  method="post" enctype="text/plain">	
					<p class="col-md-12 schedule-title"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service Online</p>
					<p class="col-md-12 schedule-subtitle">Select Preferred Name, Time, and Date</p>
					
					<input type="text" maxlength="50" id="schedule-name" name="name" placeholder="Name" required>
					<input type="text" maxlength="08" id="datepicker" name="date" placeholder="Select Date" required>
					<input type="text" maxlength="11" id="schedule-phone" name="phone" placeholder="Contact Phone #" required>
					<input type="text" maxlength="75" id="schedule-address" name="address" placeholder="Site Address" required>
					<select name="time" required>
						<option value="Morning">Morning (8am-12pm)</option>
						<option value="worofmouth">Afternoon (12pm-4pm)</option>
						<option value="homeadvisor">Evening (4pm-8pm)</option>
					</select>
					<input type='submit' name='Submit' value='Submit' class="btn" id="schedule-button"/>
				</form>  <!-- end .photo-schedule-container -->
            </div>
        </div>
    </div>
</div>	