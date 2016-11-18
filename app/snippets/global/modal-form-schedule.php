<div class="modal fade" id="ScheduleFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service Online</h4>
      </div>
      <div class="modal-body">
                <div class="photo-schedule-container">
					<p class="col-md-12 schedule-title"><i class="fa fa-calendar" aria-hidden="true"></i> Schedule Service Online</p>
					<p class="col-md-12 schedule-subtitle">Select Preferred Time & Date</p>
					<input type="text" id="schedule-date datepicker" placeholder="Select Date" required>
					<input type="text" id="schedule-phone" placeholder="Contact Phone #" required>
					<input type="text" id="schedule-address" placeholder="Site Address" required>
					<select name="time" required>
						<option value="Morning">Morning (8am-12pm)</option>
						<option value="worofmouth">Afternoon (12pm-4pm)</option>
						<option value="homeadvisor">Evening (4pm-8pm)</option>
					</select>
					<button class="btn schedule-button" onclick="schedule-service">Schedule Service</button>
				</div>
            </div>
        </div>
    </div>
</div>	