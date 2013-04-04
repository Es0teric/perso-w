<?php echo render('elements.am.top'); ?>

		<div class="general_maincontainer">
			<div class="general_maincontainer_inner">
			
				<form class="form-horizontal">
				
					<div class="control-group">
						<label class="control-label">Language:</label>
						<div class="controls">
							<select class="span3">
								<option>select language</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Country:</label>
						<div class="controls">
							<select class="span3">
								<option>select country</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">View current timezone:</label>
						<div class="controls controls-row">
							<select class="span3">
								<option>select timezone</option>
							</select>
							<label class="checkbox span2">
								<input type="checkbox" />display all timezones
							</label>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Time format:</label>
						<div class="controls">
							<select class="span3">
								<option>select format</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Default view:</label>
						<div class="controls controls-row">
							<div class="span6" style="margin-left:0;margin-bottom: 10px;">
								<label class="left" style="margin-right:5px;margin-bottom: 0;">Display</label>
								<select class="span2">
									<option>select display</option>
								</select>
								<label class="left" style="margin:0 5px;">first day of week</label>
								<select class="span2">
									<option>day</option>
								</select>
							</div>
							
							<div class="span6" style="margin-left:0;">
								<label class="left" style="margin-right:5px;margin-bottom: 0;">Layout</label>
								<select class="span2">
									<option>select display</option>
								</select>
								<label class="left" style="margin:0 0 0 10px;"><a href="#"><i class="icon-calendar"></i> <strong>What's this?</strong></a></label>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Show weekends:</label>
						<div class="controls controls-row">
							<label class="radio span1 noleftmargin">
								<input type="radio" />Yes
							</label>
							
							<label class="radio span1 noleftmargin">
								<input type="radio" />No
							</label>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Show current time:</label>
						<div class="controls controls-row">
							<label class="radio span1 noleftmargin">
								<input type="radio" />Yes
							</label>
							
							<label class="radio span1 noleftmargin">
								<input type="radio" />No
							</label>
						</div>
					</div>
					
				</form>
		
		
			</div> <!-- end general maincontainer inner -->
		</div> <!-- end general maincontainer -->
		
<?php echo render('elements.am.bottom'); ?>
