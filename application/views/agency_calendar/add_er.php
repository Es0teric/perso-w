<h2>Add Expense Reports</h2>

<div id="exp_wrap">
		
	<div class="ac_invoice_it_ex">
	
		<div class="invoice_items"><a href="#">items</a></div>
		<div class="invoice_expenses_selected">expenses</div>

	</div> 
		
	<div class="exp_report_description">
		<p><strong>Add Expense Reports</strong></p>
		<p>Only you can see your online expense reports. After saving, you will see a printable view of this expense report.</p>
	</div>
	
	<div id="add_exp_rep_content">
	
		<form class="form-horizontal">
		
			<div class="control-group">
				<label class="control-label">Purpose:</label>
				<div class="controls">
					<input type="text" class="span3">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Status:</label>
				<div class="controls">
					<select class="span3">
						<option></option>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Expenses from:</label>
				<div class="controls">
					<input type="text" class="span3" placeholder="insert datepicker here" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Expenses to:</label>
				<div class="controls">
					<input type="text" class="span3" placeholder="insert datepicker here" />
				</div>
			</div>
			
		</form>
		
		<div class="add_ex_rep_info_container">
			<form>
				<fieldset>
					<div class="control-group">
						<label class="control-label">Date</label>
						<div class="controls">
							<input type="text" class="span3" placeholder="insert datepicker here">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Type</label>
						<div class="controls">
							<select class="span3">
								<option>Airfare</option>
							</select>
						</div>
					</div>
				</fieldset>
				
				<fieldset>
					<div class="control-group">
						<label class="control-label">Payee (For example; the whole vendor or sale)</label>
						<div class="controls">
							<input type="text" class="span4">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Description</label>
						<div class="controls">
							<textarea class="span4" rows="3"></textarea>
						</div>
					</div>
				</fieldset>
				
				<fieldset class="add_ex_rep_info_fieldset_final">
					<div class="control-group">
						<label class="control-label">Amount</label>
						<div class="controls">
							<input type="text" class="input-small">
						</div>
					</div>
				</fieldset>
			</form>
			
		</div>
		
		<div class="add_exp_rep_info_extra">
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label">Total:</label>
						<div class="controls">
							<p><span>$</span>0.00</p>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Less cash advance:</label>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on">$</span>
								<input type="text" id="prependedInput" class="input-small" />
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Amount Due:</label>
						<div class="controls">
							<p><span>$</span>0.00</p>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		
		<ul class="add_reg_or_milage">
			<li><button type="button" class="btn btn-small">Add regular item</button></li>
			<li><button type="button" class="btn btn-small">Add milage item</button></li>
		</ul>
		
	</div> <!-- end expense report options content -->
	
	
	<div class="save_container other_borders">
		<p><a href="#">« Back to expenses</a></p>
		<div class="save_content">
			<button class="btn btn-primary disabled" type="submit">Save Changes</button>
		</div><!-- end save_content -->

	</div><!-- end save_container -->

</div>