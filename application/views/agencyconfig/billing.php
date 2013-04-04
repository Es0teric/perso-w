<?php echo render('elements.am.top'); ?>

	<div class="billing_maincontainer">
		<div class="billing_maincontainer_inner">
		
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Default Model Commission:</label>
					<div class="controls input-append">
						<input type="text" class="input-mini" /><span class="add-on">%</span>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Agency Commission:</label>
					<div class="controls input-append">
						<input type="text" class="input-mini" /><span class="add-on">%</span>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Default Tax Rate:</label>
					<div class="controls input-append">
						<input type="text" class="input-mini" /><span class="add-on">%</span>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Default Expense Markup:</label>
					<div class="controls input-append">
						<input type="text" class="input-mini" /><span class="add-on">%</span>
					</div>
				</div>
			</form>
		
		</div> <!-- end billing maincontainer inner -->
	</div> <!-- end billing maincontainer -->

<?php echo render('elements.am.bottom'); ?>