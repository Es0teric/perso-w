<?php echo render('elements.am.top'); ?>

	<div class="localstting_main">
		
		<div class="localstting_main_inner">
		
		<form class="form-horizontal">
		
			<div class="control-group">
				<label class="control-label">Location:</label>
				<div class="controls">
					<input type="text" class="span3" placeholder="e.g., East Brunswick, NJ or 08816" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Location ID:</label>
				<div class="controls">
					<input type="text" class="span1" placeholder="e.g., NJ" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Company Name:</label>
				<div class="controls">
					<input type="text" class="span3" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Company logo:</label>
				<div class="controls controls-row">
					<div class="span6" style="margin-left: 0;">
						<input type="file" class="span3" /> <label class="checkbox span2"><input type="checkbox" />Show Image</label>
					</div>
				</div>
			</div>
			
		</form>
		
		
		<div class="localsetting_model well well-small">
			<div class="localsetting_id_model">
				<img src="/img/no_img.png" alt="" />
			</div>
		</div>
	
	
	</div>
	
<?php echo render('elements.am.bottom'); ?>